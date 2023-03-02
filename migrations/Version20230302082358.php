<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230302082358 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Seeds for Type Table';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO type(NAME)
VALUES
('PS5'),
('PS4'),
('XBOX'),
('PC'),
('SWITCH'),
('Accessoires')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type DROP name');
        $this->addSql('ALTER TABLE type DROP id');
    }
}
