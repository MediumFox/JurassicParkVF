<?php

namespace App\Tests\Controller;

use App\Entity\Enclos;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class EnclosControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $encloRepository;
    private string $path = '/enclos/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->encloRepository = $this->manager->getRepository(Enclos::class);

        foreach ($this->encloRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Enclo index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'enclo[libelleEnclos]' => 'Testing',
            'enclo[idBiome]' => 'Testing',
            'enclo[biome]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->encloRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Enclos();
        $fixture->setLibelleEnclos('My Title');
        $fixture->setIdBiome('My Title');
        $fixture->setBiome('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Enclo');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Enclos();
        $fixture->setLibelleEnclos('Value');
        $fixture->setIdBiome('Value');
        $fixture->setBiome('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'enclo[libelleEnclos]' => 'Something New',
            'enclo[idBiome]' => 'Something New',
            'enclo[biome]' => 'Something New',
        ]);

        self::assertResponseRedirects('/enclos/');

        $fixture = $this->encloRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getLibelleEnclos());
        self::assertSame('Something New', $fixture[0]->getIdBiome());
        self::assertSame('Something New', $fixture[0]->getBiome());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Enclos();
        $fixture->setLibelleEnclos('Value');
        $fixture->setIdBiome('Value');
        $fixture->setBiome('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/enclos/');
        self::assertSame(0, $this->encloRepository->count([]));
    }
}
