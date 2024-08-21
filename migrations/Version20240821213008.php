<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240821213008 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Updates the team names for team IDs 9 and 19.';
    }

    public function up(Schema $schema): void
    {
        // Update the team name for team_id 19
        $this->addSql("UPDATE team SET name = 'COB Calais' WHERE id = 19");

        // Update the team name for team_id 9
        $this->addSql("UPDATE team SET name = 'Monaco BA' WHERE id = 9");
    }

    public function down(Schema $schema): void
    {
        // Revert the team name for team_id 19
        $this->addSql("UPDATE team SET name = 'Côte d\'Opale Basket Calais - 1' WHERE id = 19");

        // Revert the team name for team_id 9
        $this->addSql("UPDATE team SET name = 'Monaco Basket Association - 1' WHERE id = 9");
    }
}
