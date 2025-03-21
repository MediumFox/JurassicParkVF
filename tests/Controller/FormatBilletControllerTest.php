<?php

namespace App\Tests\Controller;

use App\Entity\FormatBillet;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class FormatBilletControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $formatBilletRepository;
    private string $path = '/format/billet/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->formatBilletRepository = $this->manager->getRepository(FormatBillet::class);

        foreach ($this->formatBilletRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('FormatBillet index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'format_billet[libelleBillet]' => 'Testing',
            'format_billet[imageBillet]' => 'Testing',
            'format_billet[descriptionBillet]' => 'Testing',
            'format_billet[prixBillet]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->formatBilletRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new FormatBillet();
        $fixture->setLibelleBillet('My Title');
        $fixture->setImageBillet('My Title');
        $fixture->setDescriptionBillet('My Title');
        $fixture->setPrixBillet('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('FormatBillet');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new FormatBillet();
        $fixture->setLibelleBillet('Value');
        $fixture->setImageBillet('Value');
        $fixture->setDescriptionBillet('Value');
        $fixture->setPrixBillet('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'format_billet[libelleBillet]' => 'Something New',
            'format_billet[imageBillet]' => 'Something New',
            'format_billet[descriptionBillet]' => 'Something New',
            'format_billet[prixBillet]' => 'Something New',
        ]);

        self::assertResponseRedirects('/format/billet/');

        $fixture = $this->formatBilletRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getLibelleBillet());
        self::assertSame('Something New', $fixture[0]->getImageBillet());
        self::assertSame('Something New', $fixture[0]->getDescriptionBillet());
        self::assertSame('Something New', $fixture[0]->getPrixBillet());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new FormatBillet();
        $fixture->setLibelleBillet('Value');
        $fixture->setImageBillet('Value');
        $fixture->setDescriptionBillet('Value');
        $fixture->setPrixBillet('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/format/billet/');
        self::assertSame(0, $this->formatBilletRepository->count([]));
    }
}
