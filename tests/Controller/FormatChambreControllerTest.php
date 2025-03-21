<?php

namespace App\Tests\Controller;

use App\Entity\FormatChambre;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class FormatChambreControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $formatChambreRepository;
    private string $path = '/format/chambre/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->formatChambreRepository = $this->manager->getRepository(FormatChambre::class);

        foreach ($this->formatChambreRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('FormatChambre index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'format_chambre[libelleFormatChambre]' => 'Testing',
            'format_chambre[prixFormatChambre]' => 'Testing',
            'format_chambre[descriptionFormatBillet]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->formatChambreRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new FormatChambre();
        $fixture->setLibelleFormatChambre('My Title');
        $fixture->setPrixFormatChambre('My Title');
        $fixture->setDescriptionFormatBillet('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('FormatChambre');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new FormatChambre();
        $fixture->setLibelleFormatChambre('Value');
        $fixture->setPrixFormatChambre('Value');
        $fixture->setDescriptionFormatBillet('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'format_chambre[libelleFormatChambre]' => 'Something New',
            'format_chambre[prixFormatChambre]' => 'Something New',
            'format_chambre[descriptionFormatBillet]' => 'Something New',
        ]);

        self::assertResponseRedirects('/format/chambre/');

        $fixture = $this->formatChambreRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getLibelleFormatChambre());
        self::assertSame('Something New', $fixture[0]->getPrixFormatChambre());
        self::assertSame('Something New', $fixture[0]->getDescriptionFormatBillet());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new FormatChambre();
        $fixture->setLibelleFormatChambre('Value');
        $fixture->setPrixFormatChambre('Value');
        $fixture->setDescriptionFormatBillet('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/format/chambre/');
        self::assertSame(0, $this->formatChambreRepository->count([]));
    }
}
