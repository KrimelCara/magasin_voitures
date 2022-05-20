<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220520132110 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajout des tables nom,marque,couleur,annee,prix';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voitures ADD nom VARCHAR(255) NOT NULL, ADD marque VARCHAR(255) NOT NULL, ADD couleur VARCHAR(255) NOT NULL, ADD annee INT NOT NULL, ADD prix DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voitures DROP nom, DROP marque, DROP couleur, DROP annee, DROP prix');
    }
}
