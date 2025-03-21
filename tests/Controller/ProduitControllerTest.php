<?php

namespace App\Tests\Controller;

use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ProduitControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $produitRepository;
    private string $path = '/produit/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->produitRepository = $this->manager->getRepository(Produit::class);

        foreach ($this->produitRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Produit index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'produit[libelleProduit]' => 'Testing',
            'produit[imageProduit]' => 'Testing',
            'produit[descriptionProduit]' => 'Testing',
            'produit[stock]' => 'Testing',
            'produit[disponibleAchat]' => 'Testing',
            'produit[prixProduit]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->produitRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Produit();
        $fixture->setLibelleProduit('My Title');
        $fixture->setImageProduit('My Title');
        $fixture->setDescriptionProduit('My Title');
        $fixture->setStock('My Title');
        $fixture->setDisponibleAchat('My Title');
        $fixture->setPrixProduit('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Produit');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Produit();
        $fixture->setLibelleProduit('Value');
        $fixture->setImageProduit('Value');
        $fixture->setDescriptionProduit('Value');
        $fixture->setStock('Value');
        $fixture->setDisponibleAchat('Value');
        $fixture->setPrixProduit('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'produit[libelleProduit]' => 'Something New',
            'produit[imageProduit]' => 'Something New',
            'produit[descriptionProduit]' => 'Something New',
            'produit[stock]' => 'Something New',
            'produit[disponibleAchat]' => 'Something New',
            'produit[prixProduit]' => 'Something New',
        ]);

        self::assertResponseRedirects('/produit/');

        $fixture = $this->produitRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getLibelleProduit());
        self::assertSame('Something New', $fixture[0]->getImageProduit());
        self::assertSame('Something New', $fixture[0]->getDescriptionProduit());
        self::assertSame('Something New', $fixture[0]->getStock());
        self::assertSame('Something New', $fixture[0]->getDisponibleAchat());
        self::assertSame('Something New', $fixture[0]->getPrixProduit());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Produit();
        $fixture->setLibelleProduit('Value');
        $fixture->setImageProduit('Value');
        $fixture->setDescriptionProduit('Value');
        $fixture->setStock('Value');
        $fixture->setDisponibleAchat('Value');
        $fixture->setPrixProduit('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/produit/');
        self::assertSame(0, $this->produitRepository->count([]));
    }
}
