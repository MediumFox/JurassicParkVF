<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250401155104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE acheter_produit_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE "commande_id_seq" INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE "commande" (id INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, status VARCHAR(255) NOT NULL, total DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN "commande".created_at IS '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP CONSTRAINT fk_a704f21019eb6921
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP CONSTRAINT fk_a704f210b897366b
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_a704f210b897366b
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_a704f21019eb6921
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP CONSTRAINT acheter_produit_pkey
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD commande_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD quantite INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD prix DOUBLE PRECISION NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP client_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP date_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP qte
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ALTER produit_id DROP NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD CONSTRAINT FK_A704F21082EA2E54 FOREIGN KEY (commande_id) REFERENCES "commande" (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A704F21082EA2E54 ON acheter_produit (commande_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD PRIMARY KEY (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE produit ADD slug VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE produit ADD created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN produit.created_at IS '(DC2Type:datetime_immutable)'
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP CONSTRAINT FK_A704F21082EA2E54
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE acheter_produit_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE "commande_id_seq" CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE "commande"
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_A704F21082EA2E54
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX acheter_produit_pkey
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD client_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD date_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD qte INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP commande_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP quantite
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP prix
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ALTER produit_id SET NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD CONSTRAINT fk_a704f21019eb6921 FOREIGN KEY (client_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD CONSTRAINT fk_a704f210b897366b FOREIGN KEY (date_id) REFERENCES date (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_a704f210b897366b ON acheter_produit (date_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_a704f21019eb6921 ON acheter_produit (client_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD PRIMARY KEY (client_id, produit_id, date_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE produit DROP slug
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE produit DROP created_at
        SQL);
    }
}
