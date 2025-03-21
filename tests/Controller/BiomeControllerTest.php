<?php

namespace App\Tests\Controller;

use App\Entity\Biome;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class BiomeControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $biomeRepository;
    private string $path = '/biome/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->biomeRepository = $this->manager->getRepository(Biome::class);

        foreach ($this->biomeRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Biome index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'biome[libelleBiome]' => 'Testing',
            'biome[descriptionBiome]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->biomeRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Biome();
        $fixture->setLibelleBiome('My Title');
        $fixture->setDescriptionBiome('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Biome');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Biome();
        $fixture->setLibelleBiome('Value');
        $fixture->setDescriptionBiome('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'biome[libelleBiome]' => 'Something New',
            'biome[descriptionBiome]' => 'Something New',
        ]);

        self::assertResponseRedirects('/biome/');

        $fixture = $this->biomeRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getLibelleBiome());
        self::assertSame('Something New', $fixture[0]->getDescriptionBiome());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Biome();
        $fixture->setLibelleBiome('Value');
        $fixture->setDescriptionBiome('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/biome/');
        self::assertSame(0, $this->biomeRepository->count([]));
    }
}
