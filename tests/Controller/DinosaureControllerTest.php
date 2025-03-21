<?php

namespace App\Tests\Controller;

use App\Entity\Dinosaure;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class DinosaureControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $dinosaureRepository;
    private string $path = '/dinosaure/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->dinosaureRepository = $this->manager->getRepository(Dinosaure::class);

        foreach ($this->dinosaureRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Dinosaure index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'dinosaure[imageDinosaure]' => 'Testing',
            'dinosaure[libelleDinosaure]' => 'Testing',
            'dinosaure[regimeDinosaure]' => 'Testing',
            'dinosaure[ereDinosaure]' => 'Testing',
            'dinosaure[descriptionDinosaure]' => 'Testing',
            'dinosaure[enclos]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->dinosaureRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Dinosaure();
        $fixture->setImageDinosaure('My Title');
        $fixture->setLibelleDinosaure('My Title');
        $fixture->setRegimeDinosaure('My Title');
        $fixture->setEreDinosaure('My Title');
        $fixture->setDescriptionDinosaure('My Title');
        $fixture->setEnclos('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Dinosaure');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Dinosaure();
        $fixture->setImageDinosaure('Value');
        $fixture->setLibelleDinosaure('Value');
        $fixture->setRegimeDinosaure('Value');
        $fixture->setEreDinosaure('Value');
        $fixture->setDescriptionDinosaure('Value');
        $fixture->setEnclos('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'dinosaure[imageDinosaure]' => 'Something New',
            'dinosaure[libelleDinosaure]' => 'Something New',
            'dinosaure[regimeDinosaure]' => 'Something New',
            'dinosaure[ereDinosaure]' => 'Something New',
            'dinosaure[descriptionDinosaure]' => 'Something New',
            'dinosaure[enclos]' => 'Something New',
        ]);

        self::assertResponseRedirects('/dinosaure/');

        $fixture = $this->dinosaureRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getImageDinosaure());
        self::assertSame('Something New', $fixture[0]->getLibelleDinosaure());
        self::assertSame('Something New', $fixture[0]->getRegimeDinosaure());
        self::assertSame('Something New', $fixture[0]->getEreDinosaure());
        self::assertSame('Something New', $fixture[0]->getDescriptionDinosaure());
        self::assertSame('Something New', $fixture[0]->getEnclos());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Dinosaure();
        $fixture->setImageDinosaure('Value');
        $fixture->setLibelleDinosaure('Value');
        $fixture->setRegimeDinosaure('Value');
        $fixture->setEreDinosaure('Value');
        $fixture->setDescriptionDinosaure('Value');
        $fixture->setEnclos('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/dinosaure/');
        self::assertSame(0, $this->dinosaureRepository->count([]));
    }
}
