<?php

namespace App\Tests\Controller;

use App\Entity\Administrateur;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class AdministrateurControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $administrateurRepository;
    private string $path = '/administrateur/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->administrateurRepository = $this->manager->getRepository(Administrateur::class);

        foreach ($this->administrateurRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Administrateur index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'administrateur[email]' => 'Testing',
            'administrateur[pwd]' => 'Testing',
            'administrateur[numeroTelephone]' => 'Testing',
            'administrateur[nom]' => 'Testing',
            'administrateur[prenom]' => 'Testing',
            'administrateur[adminLevel]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->administrateurRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Administrateur();
        $fixture->setEmail('My Title');
        $fixture->setPwd('My Title');
        $fixture->setNumeroTelephone('My Title');
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setAdminLevel('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Administrateur');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Administrateur();
        $fixture->setEmail('Value');
        $fixture->setPwd('Value');
        $fixture->setNumeroTelephone('Value');
        $fixture->setNom('Value');
        $fixture->setPrenom('Value');
        $fixture->setAdminLevel('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'administrateur[email]' => 'Something New',
            'administrateur[pwd]' => 'Something New',
            'administrateur[numeroTelephone]' => 'Something New',
            'administrateur[nom]' => 'Something New',
            'administrateur[prenom]' => 'Something New',
            'administrateur[adminLevel]' => 'Something New',
        ]);

        self::assertResponseRedirects('/administrateur/');

        $fixture = $this->administrateurRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getPwd());
        self::assertSame('Something New', $fixture[0]->getNumeroTelephone());
        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getPrenom());
        self::assertSame('Something New', $fixture[0]->getAdminLevel());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Administrateur();
        $fixture->setEmail('Value');
        $fixture->setPwd('Value');
        $fixture->setNumeroTelephone('Value');
        $fixture->setNom('Value');
        $fixture->setPrenom('Value');
        $fixture->setAdminLevel('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/administrateur/');
        self::assertSame(0, $this->administrateurRepository->count([]));
    }
}
