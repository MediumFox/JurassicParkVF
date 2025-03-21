<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250317204517 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE remboursement_hotel_id_seq CASCADE');
        $this->addSql('ALTER TABLE enclos DROP CONSTRAINT fk_8ccecb21b4e1886c');
        $this->addSql('DROP INDEX idx_8ccecb21b4e1886c');
        $this->addSql('ALTER TABLE enclos DROP id_biome_id');
        $this->addSql('ALTER TABLE remboursement_hotel DROP CONSTRAINT remboursement_hotel_pkey');
        $this->addSql('ALTER TABLE remboursement_hotel DROP id');
        $this->addSql('ALTER TABLE remboursement_hotel ADD PRIMARY KEY (remboursement_id, louer_hotel_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE remboursement_hotel_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('DROP INDEX remboursement_hotel_pkey');
        $this->addSql('ALTER TABLE remboursement_hotel ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE remboursement_hotel ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE enclos ADD id_biome_id INT NOT NULL');
        $this->addSql('ALTER TABLE enclos ADD CONSTRAINT fk_8ccecb21b4e1886c FOREIGN KEY (id_biome_id) REFERENCES biome (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_8ccecb21b4e1886c ON enclos (id_biome_id)');
    }
}
