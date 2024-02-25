<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240225152042 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE clients (id INT AUTO_INCREMENT NOT NULL, compte_affaire VARCHAR(255) NOT NULL, compte_evenement VARCHAR(255) NOT NULL, compte_dernier_evenement VARCHAR(255) NOT NULL, numero_fiche INT NOT NULL, libelle_civilite VARCHAR(10) DEFAULT NULL, prop_actuel_vehicule VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) DEFAULT NULL, num_nom_voie VARCHAR(255) DEFAULT NULL, complement_adress VARCHAR(255) DEFAULT NULL, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL, tel_domicile VARCHAR(50) DEFAULT NULL, tel_portable VARCHAR(50) DEFAULT NULL, tel_job VARCHAR(50) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, date_mise_en_circ DATETIME DEFAULT NULL, date_achat DATETIME DEFAULT NULL, date_derniere_evenement DATETIME NOT NULL, libelle_marque VARCHAR(255) NOT NULL, libelle_modele VARCHAR(255) DEFAULT NULL, version VARCHAR(255) DEFAULT NULL, vin VARCHAR(255) NOT NULL, immatriculation VARCHAR(255) DEFAULT NULL, type_prospect VARCHAR(255) NOT NULL, kilometrage INT DEFAULT NULL, libelle_energie VARCHAR(50) DEFAULT NULL, vendeur_vn VARCHAR(255) DEFAULT NULL, vendeur_vo VARCHAR(255) DEFAULT NULL, commentaire_facturation VARCHAR(255) DEFAULT NULL, type_vn_vo VARCHAR(50) DEFAULT NULL, numero_dossier VARCHAR(255) DEFAULT NULL, intermediaire_vente VARCHAR(255) DEFAULT NULL, date_evenement DATETIME NOT NULL, origine_evenement VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE clients');
    }
}
