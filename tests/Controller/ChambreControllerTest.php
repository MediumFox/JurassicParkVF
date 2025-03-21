<?php

namespace App\Tests\Controller;

use App\Entity\Chambre;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ChambreControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $chambreRepository;
    private string $path = '/chambre/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->chambreRepository = $this->manager->getRepository(Chambre::class);

        foreach ($this->chambreRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Chambre index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'chambre[numeroChambre]' => 'Testing',
            'chambre[etageChambre]' => 'Testing',
            'chambre[hotel]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->chambreRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Chambre();
        $fixture->setNumeroChambre('My Title');
        $fixture->setEtageChambre('My Title');
        $fixture->setHotel('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Chambre');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Chambre();
        $fixture->setNumeroChambre('Value');
        $fixture->setEtageChambre('Value');
        $fixture->setHotel('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'chambre[numeroChambre]' => 'Something New',
            'chambre[etageChambre]' => 'Something New',
            'chambre[hotel]' => 'Something New',
        ]);

        self::assertResponseRedirects('/chambre/');

        $fixture = $this->chambreRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getNumeroChambre());
        self::assertSame('Something New', $fixture[0]->getEtageChambre());
        self::assertSame('Something New', $fixture[0]->getHotel());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Chambre();
        $fixture->setNumeroChambre('Value');
        $fixture->setEtageChambre('Value');
        $fixture->setHotel('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/chambre/');
        self::assertSame(0, $this->chambreRepository->count([]));
    }
}
