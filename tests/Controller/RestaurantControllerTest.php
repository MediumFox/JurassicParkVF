<?php

namespace App\Tests\Controller;

use App\Entity\Restaurant;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class RestaurantControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $restaurantRepository;
    private string $path = '/restaurant/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->restaurantRepository = $this->manager->getRepository(Restaurant::class);

        foreach ($this->restaurantRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Restaurant index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'restaurant[libelleRestaurant]' => 'Testing',
            'restaurant[imageRestaurant]' => 'Testing',
            'restaurant[nbTable]' => 'Testing',
            'restaurant[biome]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->restaurantRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Restaurant();
        $fixture->setLibelleRestaurant('My Title');
        $fixture->setImageRestaurant('My Title');
        $fixture->setNbTable('My Title');
        $fixture->setBiome('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Restaurant');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Restaurant();
        $fixture->setLibelleRestaurant('Value');
        $fixture->setImageRestaurant('Value');
        $fixture->setNbTable('Value');
        $fixture->setBiome('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'restaurant[libelleRestaurant]' => 'Something New',
            'restaurant[imageRestaurant]' => 'Something New',
            'restaurant[nbTable]' => 'Something New',
            'restaurant[biome]' => 'Something New',
        ]);

        self::assertResponseRedirects('/restaurant/');

        $fixture = $this->restaurantRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getLibelleRestaurant());
        self::assertSame('Something New', $fixture[0]->getImageRestaurant());
        self::assertSame('Something New', $fixture[0]->getNbTable());
        self::assertSame('Something New', $fixture[0]->getBiome());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Restaurant();
        $fixture->setLibelleRestaurant('Value');
        $fixture->setImageRestaurant('Value');
        $fixture->setNbTable('Value');
        $fixture->setBiome('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/restaurant/');
        self::assertSame(0, $this->restaurantRepository->count([]));
    }
}
