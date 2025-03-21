<?php

namespace App\Tests\Controller;

use App\Entity\Hotel;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class HotelControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $hotelRepository;
    private string $path = '/hotel/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->hotelRepository = $this->manager->getRepository(Hotel::class);

        foreach ($this->hotelRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Hotel index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'hotel[libelleHotel]' => 'Testing',
            'hotel[imageHotel]' => 'Testing',
            'hotel[descriptionHotel]' => 'Testing',
            'hotel[biome]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->hotelRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Hotel();
        $fixture->setLibelleHotel('My Title');
        $fixture->setImageHotel('My Title');
        $fixture->setDescriptionHotel('My Title');
        $fixture->setBiome('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Hotel');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Hotel();
        $fixture->setLibelleHotel('Value');
        $fixture->setImageHotel('Value');
        $fixture->setDescriptionHotel('Value');
        $fixture->setBiome('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'hotel[libelleHotel]' => 'Something New',
            'hotel[imageHotel]' => 'Something New',
            'hotel[descriptionHotel]' => 'Something New',
            'hotel[biome]' => 'Something New',
        ]);

        self::assertResponseRedirects('/hotel/');

        $fixture = $this->hotelRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getLibelleHotel());
        self::assertSame('Something New', $fixture[0]->getImageHotel());
        self::assertSame('Something New', $fixture[0]->getDescriptionHotel());
        self::assertSame('Something New', $fixture[0]->getBiome());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Hotel();
        $fixture->setLibelleHotel('Value');
        $fixture->setImageHotel('Value');
        $fixture->setDescriptionHotel('Value');
        $fixture->setBiome('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/hotel/');
        self::assertSame(0, $this->hotelRepository->count([]));
    }
}
