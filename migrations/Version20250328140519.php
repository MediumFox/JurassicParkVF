<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250328140519 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE biome_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE chambre_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE date_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE dinosaure_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE enclos_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE format_billet_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE format_chambre_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE horaire_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE hotel_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE jour_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE louer_hotel_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE payer_billet_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE produit_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE remboursement_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE restaurant_id_seq INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE acheter_produit (client_id INT NOT NULL, produit_id INT NOT NULL, date_id INT NOT NULL, qte INT NOT NULL, PRIMARY KEY(client_id, produit_id, date_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A704F21019EB6921 ON acheter_produit (client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A704F210F347EFB ON acheter_produit (produit_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A704F210B897366B ON acheter_produit (date_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE biome (id INT NOT NULL, libelle_biome VARCHAR(255) NOT NULL, description_biome VARCHAR(1000) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE chambre (id INT NOT NULL, hotel_id INT NOT NULL, format_chambre_id INT NOT NULL, numero_chambre VARCHAR(255) NOT NULL, etage_chambre VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_C509E4FF3243BB18 ON chambre (hotel_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_C509E4FF589AE8D9 ON chambre (format_chambre_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE date (id INT NOT NULL, date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE dinosaure (id INT NOT NULL, enclos_id INT NOT NULL, image_dinosaure VARCHAR(255) NOT NULL, libelle_dinosaure VARCHAR(255) NOT NULL, regime_dinosaure VARCHAR(255) NOT NULL, ere_dinosaure VARCHAR(255) NOT NULL, description_dinosaure VARCHAR(1000) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_450ADBC0B1C0859 ON dinosaure (enclos_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE enclos (id INT NOT NULL, biome_id INT NOT NULL, libelle_enclos VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_8CCECB21E43A64F9 ON enclos (biome_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE format_billet (id INT NOT NULL, libelle_billet VARCHAR(255) NOT NULL, image_billet VARCHAR(255) NOT NULL, description_billet VARCHAR(1000) NOT NULL, prix_billet INT NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE format_chambre (id INT NOT NULL, libelle_format_chambre VARCHAR(255) NOT NULL, prix_format_chambre INT NOT NULL, description_format_billet VARCHAR(1000) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE horaire (id INT NOT NULL, ouverture TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, fermeture TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE hotel (id INT NOT NULL, biome_id INT DEFAULT NULL, libelle_hotel VARCHAR(255) NOT NULL, image_hotel VARCHAR(255) NOT NULL, description_hotel VARCHAR(1000) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_3535ED9E43A64F9 ON hotel (biome_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE jour (id INT NOT NULL, libelle_jour VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE louer_hotel (id INT NOT NULL, user_id INT NOT NULL, chambre_id INT NOT NULL, date_id INT NOT NULL, debut_location TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, fin_location TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_70C4104FA76ED395 ON louer_hotel (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_70C4104F9B177F54 ON louer_hotel (chambre_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_70C4104FB897366B ON louer_hotel (date_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE ouverture_restaurant (restaurant_id INT NOT NULL, jour_id INT NOT NULL, horaire_id INT NOT NULL, PRIMARY KEY(restaurant_id, jour_id, horaire_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_697FD193B1E7706E ON ouverture_restaurant (restaurant_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_697FD193220C6AD0 ON ouverture_restaurant (jour_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_697FD19358C54515 ON ouverture_restaurant (horaire_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE payer_billet (id INT NOT NULL, user_id INT NOT NULL, billet_id INT NOT NULL, date_id INT NOT NULL, debut_billet TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, fin_billet TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_4744803CA76ED395 ON payer_billet (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_4744803C44973C78 ON payer_billet (billet_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_4744803CB897366B ON payer_billet (date_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE produit (id INT NOT NULL, libelle_produit VARCHAR(255) NOT NULL, image_produit VARCHAR(255) NOT NULL, description_produit VARCHAR(1000) NOT NULL, stock INT NOT NULL, disponible_achat BOOLEAN NOT NULL, prix_produit DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE remboursement (id INT NOT NULL, client_id INT NOT NULL, date_demande TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, statut VARCHAR(255) NOT NULL, motif VARCHAR(1500) NOT NULL, montant DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_C0C0D9EF19EB6921 ON remboursement (client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE remboursement_billet (remboursement_id INT NOT NULL, payer_billet_id INT NOT NULL, PRIMARY KEY(remboursement_id, payer_billet_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B9B130B1F61EE8B ON remboursement_billet (remboursement_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B9B130B1102C441 ON remboursement_billet (payer_billet_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE remboursement_hotel (remboursement_id INT NOT NULL, louer_hotel_id INT NOT NULL, PRIMARY KEY(remboursement_id, louer_hotel_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_D7E7E7CF61EE8B ON remboursement_hotel (remboursement_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_D7E7E7CCB4C1B45 ON remboursement_hotel (louer_hotel_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE reserver_restaurant (client_id INT NOT NULL, restaurant_id INT NOT NULL, date_id INT NOT NULL, date_reservation TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, present BOOLEAN NOT NULL, nb_personne INT NOT NULL, PRIMARY KEY(client_id, restaurant_id, date_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_25F6B43A19EB6921 ON reserver_restaurant (client_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_25F6B43AB1E7706E ON reserver_restaurant (restaurant_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_25F6B43AB897366B ON reserver_restaurant (date_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE restaurant (id INT NOT NULL, biome_id INT NOT NULL, libelle_restaurant VARCHAR(255) NOT NULL, image_restaurant VARCHAR(255) NOT NULL, nb_table INT NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_EB95123FE43A64F9 ON restaurant (biome_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE "user" (id INT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, numero_telephone VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, roles JSON NOT NULL, is_verified BOOLEAN NOT NULL, type VARCHAR(255) NOT NULL, adresse_postal VARCHAR(255) DEFAULT NULL, code_postal INT DEFAULT NULL, otp VARCHAR(6) DEFAULT NULL, admin_level INT DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGSERIAL NOT NULL, body TEXT NOT NULL, headers TEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, available_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, delivered_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN messenger_messages.created_at IS '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN messenger_messages.available_at IS '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN messenger_messages.delivered_at IS '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            CREATE OR REPLACE FUNCTION notify_messenger_messages() RETURNS TRIGGER AS $$
                BEGIN
                    PERFORM pg_notify('messenger_messages', NEW.queue_name::text);
                    RETURN NEW;
                END;
            $$ LANGUAGE plpgsql;
        SQL);
        $this->addSql(<<<'SQL'
            DROP TRIGGER IF EXISTS notify_trigger ON messenger_messages;
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON messenger_messages FOR EACH ROW EXECUTE PROCEDURE notify_messenger_messages();
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD CONSTRAINT FK_A704F21019EB6921 FOREIGN KEY (client_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD CONSTRAINT FK_A704F210F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit ADD CONSTRAINT FK_A704F210B897366B FOREIGN KEY (date_id) REFERENCES date (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chambre ADD CONSTRAINT FK_C509E4FF3243BB18 FOREIGN KEY (hotel_id) REFERENCES hotel (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chambre ADD CONSTRAINT FK_C509E4FF589AE8D9 FOREIGN KEY (format_chambre_id) REFERENCES format_chambre (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dinosaure ADD CONSTRAINT FK_450ADBC0B1C0859 FOREIGN KEY (enclos_id) REFERENCES enclos (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE enclos ADD CONSTRAINT FK_8CCECB21E43A64F9 FOREIGN KEY (biome_id) REFERENCES biome (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE hotel ADD CONSTRAINT FK_3535ED9E43A64F9 FOREIGN KEY (biome_id) REFERENCES biome (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE louer_hotel ADD CONSTRAINT FK_70C4104FA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE louer_hotel ADD CONSTRAINT FK_70C4104F9B177F54 FOREIGN KEY (chambre_id) REFERENCES chambre (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE louer_hotel ADD CONSTRAINT FK_70C4104FB897366B FOREIGN KEY (date_id) REFERENCES date (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ouverture_restaurant ADD CONSTRAINT FK_697FD193B1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ouverture_restaurant ADD CONSTRAINT FK_697FD193220C6AD0 FOREIGN KEY (jour_id) REFERENCES jour (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ouverture_restaurant ADD CONSTRAINT FK_697FD19358C54515 FOREIGN KEY (horaire_id) REFERENCES horaire (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE payer_billet ADD CONSTRAINT FK_4744803CA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE payer_billet ADD CONSTRAINT FK_4744803C44973C78 FOREIGN KEY (billet_id) REFERENCES format_billet (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE payer_billet ADD CONSTRAINT FK_4744803CB897366B FOREIGN KEY (date_id) REFERENCES date (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement ADD CONSTRAINT FK_C0C0D9EF19EB6921 FOREIGN KEY (client_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement_billet ADD CONSTRAINT FK_B9B130B1F61EE8B FOREIGN KEY (remboursement_id) REFERENCES remboursement (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement_billet ADD CONSTRAINT FK_B9B130B1102C441 FOREIGN KEY (payer_billet_id) REFERENCES payer_billet (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement_hotel ADD CONSTRAINT FK_D7E7E7CF61EE8B FOREIGN KEY (remboursement_id) REFERENCES remboursement (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement_hotel ADD CONSTRAINT FK_D7E7E7CCB4C1B45 FOREIGN KEY (louer_hotel_id) REFERENCES louer_hotel (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reserver_restaurant ADD CONSTRAINT FK_25F6B43A19EB6921 FOREIGN KEY (client_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reserver_restaurant ADD CONSTRAINT FK_25F6B43AB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reserver_restaurant ADD CONSTRAINT FK_25F6B43AB897366B FOREIGN KEY (date_id) REFERENCES date (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE restaurant ADD CONSTRAINT FK_EB95123FE43A64F9 FOREIGN KEY (biome_id) REFERENCES biome (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE biome_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE chambre_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE date_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE dinosaure_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE enclos_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE format_billet_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE format_chambre_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE horaire_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE hotel_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE jour_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE louer_hotel_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE payer_billet_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE produit_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE remboursement_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE restaurant_id_seq CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP SEQUENCE "user_id_seq" CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP CONSTRAINT FK_A704F21019EB6921
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP CONSTRAINT FK_A704F210F347EFB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE acheter_produit DROP CONSTRAINT FK_A704F210B897366B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chambre DROP CONSTRAINT FK_C509E4FF3243BB18
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chambre DROP CONSTRAINT FK_C509E4FF589AE8D9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dinosaure DROP CONSTRAINT FK_450ADBC0B1C0859
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE enclos DROP CONSTRAINT FK_8CCECB21E43A64F9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE hotel DROP CONSTRAINT FK_3535ED9E43A64F9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE louer_hotel DROP CONSTRAINT FK_70C4104FA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE louer_hotel DROP CONSTRAINT FK_70C4104F9B177F54
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE louer_hotel DROP CONSTRAINT FK_70C4104FB897366B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ouverture_restaurant DROP CONSTRAINT FK_697FD193B1E7706E
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ouverture_restaurant DROP CONSTRAINT FK_697FD193220C6AD0
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ouverture_restaurant DROP CONSTRAINT FK_697FD19358C54515
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE payer_billet DROP CONSTRAINT FK_4744803CA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE payer_billet DROP CONSTRAINT FK_4744803C44973C78
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE payer_billet DROP CONSTRAINT FK_4744803CB897366B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement DROP CONSTRAINT FK_C0C0D9EF19EB6921
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement_billet DROP CONSTRAINT FK_B9B130B1F61EE8B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement_billet DROP CONSTRAINT FK_B9B130B1102C441
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement_hotel DROP CONSTRAINT FK_D7E7E7CF61EE8B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement_hotel DROP CONSTRAINT FK_D7E7E7CCB4C1B45
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reserver_restaurant DROP CONSTRAINT FK_25F6B43A19EB6921
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reserver_restaurant DROP CONSTRAINT FK_25F6B43AB1E7706E
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reserver_restaurant DROP CONSTRAINT FK_25F6B43AB897366B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE restaurant DROP CONSTRAINT FK_EB95123FE43A64F9
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE acheter_produit
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE biome
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE chambre
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE date
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE dinosaure
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE enclos
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE format_billet
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE format_chambre
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE horaire
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE hotel
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE jour
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE louer_hotel
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE ouverture_restaurant
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE payer_billet
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE produit
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE remboursement
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE remboursement_billet
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE remboursement_hotel
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE reserver_restaurant
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE restaurant
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE "user"
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}
