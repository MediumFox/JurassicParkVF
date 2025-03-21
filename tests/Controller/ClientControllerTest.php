<?php

namespace App\Tests\Controller;

use App\Entity\Client;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ClientControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $clientRepository;
    private string $path = '/client/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->clientRepository = $this->manager->getRepository(Client::class);

        foreach ($this->clientRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Client index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'client[email]' => 'Testing',
            'client[pwd]' => 'Testing',
            'client[numeroTelephone]' => 'Testing',
            'client[nom]' => 'Testing',
            'client[prenom]' => 'Testing',
            'client[adressePostal]' => 'Testing',
            'client[codePostal]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->clientRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Client();
        $fixture->setEmail('My Title');
        $fixture->setPwd('My Title');
        $fixture->setNumeroTelephone('My Title');
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setAdressePostal('My Title');
        $fixture->setCodePostal('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Client');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Client();
        $fixture->setEmail('Value');
        $fixture->setPwd('Value');
        $fixture->setNumeroTelephone('Value');
        $fixture->setNom('Value');
        $fixture->setPrenom('Value');
        $fixture->setAdressePostal('Value');
        $fixture->setCodePostal('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'client[email]' => 'Something New',
            'client[pwd]' => 'Something New',
            'client[numeroTelephone]' => 'Something New',
            'client[nom]' => 'Something New',
            'client[prenom]' => 'Something New',
            'client[adressePostal]' => 'Something New',
            'client[codePostal]' => 'Something New',
        ]);

        self::assertResponseRedirects('/client/');

        $fixture = $this->clientRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getPwd());
        self::assertSame('Something New', $fixture[0]->getNumeroTelephone());
        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getPrenom());
        self::assertSame('Something New', $fixture[0]->getAdressePostal());
        self::assertSame('Something New', $fixture[0]->getCodePostal());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Client();
        $fixture->setEmail('Value');
        $fixture->setPwd('Value');
        $fixture->setNumeroTelephone('Value');
        $fixture->setNom('Value');
        $fixture->setPrenom('Value');
        $fixture->setAdressePostal('Value');
        $fixture->setCodePostal('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/client/');
        self::assertSame(0, $this->clientRepository->count([]));
    }
}
