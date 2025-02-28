<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220204165009 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Challenges (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, created_at DATE NOT NULL, updated_at DATE NOT NULL, expired_at DATE DEFAULT NULL, INDEX IDX_48E8A430A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Cigarettes_Stats (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, date DATETIME NOT NULL, cigarettes INT NOT NULL, INDEX IDX_B6DC8E31A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Steps_Stats (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, steps INT NOT NULL, date DATETIME NOT NULL, INDEX IDX_BF21B577A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Users (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, age INT NOT NULL, gender VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, avatar VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Challenges ADD CONSTRAINT FK_48E8A430A76ED395 FOREIGN KEY (user_id) REFERENCES Users (id)');
        $this->addSql('ALTER TABLE Cigarettes_Stats ADD CONSTRAINT FK_B6DC8E31A76ED395 FOREIGN KEY (user_id) REFERENCES Users (id)');
        $this->addSql('ALTER TABLE Steps_Stats ADD CONSTRAINT FK_BF21B577A76ED395 FOREIGN KEY (user_id) REFERENCES Users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Challenges DROP FOREIGN KEY FK_48E8A430A76ED395');
        $this->addSql('ALTER TABLE Cigarettes_Stats DROP FOREIGN KEY FK_B6DC8E31A76ED395');
        $this->addSql('ALTER TABLE Steps_Stats DROP FOREIGN KEY FK_BF21B577A76ED395');
        $this->addSql('DROP TABLE Challenges');
        $this->addSql('DROP TABLE Cigarettes_Stats');
        $this->addSql('DROP TABLE Steps_Stats');
        $this->addSql('DROP TABLE Users');
    }
}
