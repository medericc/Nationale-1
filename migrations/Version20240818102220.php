<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240818102220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Mise à jour des noms des équipes et des league_ids';
    }

    public function up(Schema $schema): void
    {
        // Mettre à jour les noms des équipes
        $this->addSql("UPDATE team SET name = 'Colomiers Basket' WHERE id = 1");
        $this->addSql("UPDATE team SET name = 'Martigues' WHERE id = 2");
        $this->addSql("UPDATE team SET name = 'Geispolsheim' WHERE id = 3");
        $this->addSql("UPDATE team SET name = 'Annemasse' WHERE id = 4");
        $this->addSql("UPDATE team SET name = 'Le Poinçonnet' WHERE id = 5");
        $this->addSql("UPDATE team SET name = 'Strasbourg SIG' WHERE id = 6");
        $this->addSql("UPDATE team SET name = 'Limoges ABC' WHERE id = 7");
        $this->addSql("UPDATE team SET name = 'Roanne' WHERE id = 8");
        $this->addSql("UPDATE team SET name = 'Monaco Basket Association - 1' WHERE id = 9");
        $this->addSql("UPDATE team SET name = 'Lattes/Montpellier' WHERE id = 10");
        $this->addSql("UPDATE team SET name = 'Villeurbanne' WHERE id = 11");
        $this->addSql("UPDATE team SET name = 'St-Delphin' WHERE id = 12");
        $this->addSql("UPDATE team SET name = 'Centre fédéral' WHERE id = 13");
        $this->addSql("UPDATE team SET name = 'La Glacerie' WHERE id = 14");
        $this->addSql("UPDATE team SET name = 'Bihorel/HDR' WHERE id = 15");
        $this->addSql("UPDATE team SET name = 'Escaudain' WHERE id = 16");
        $this->addSql("UPDATE team SET name = 'Champagne Basket' WHERE id = 17");
        $this->addSql("UPDATE team SET name = 'ASA Sceaux' WHERE id = 18");
        $this->addSql("UPDATE team SET name = 'Côte d''Opale Basket Calais - 1' WHERE id = 19");
        $this->addSql("UPDATE team SET name = 'Stade Français' WHERE id = 20");
        $this->addSql("UPDATE team SET name = 'Haguenau' WHERE id = 21");
        $this->addSql("UPDATE team SET name = 'Franconville BCFPB' WHERE id = 22");
        $this->addSql("UPDATE team SET name = 'Trith Basket' WHERE id = 23");
        $this->addSql("UPDATE team SET name = 'Dieppe' WHERE id = 24");

        // Mettre à jour les league_ids
        $this->addSql("UPDATE team SET league_id = 1 WHERE id IN (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)");
        $this->addSql("UPDATE team SET league_id = 2 WHERE id IN (13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24)");
    }

    public function down(Schema $schema): void
    {
        // Restaurer les anciennes valeurs des noms d'équipes
        $this->addSql("UPDATE team SET name = 'Tarbes GB' WHERE id = 1");
        $this->addSql("UPDATE team SET name = 'Lattes-Montpellier' WHERE id = 2");
        $this->addSql("UPDATE team SET name = 'Landerneau BB' WHERE id = 3");
        $this->addSql("UPDATE team SET name = 'Saint Amand' WHERE id = 4");
        $this->addSql("UPDATE team SET name = 'ASVEL Féminin' WHERE id = 5");
        $this->addSql("UPDATE team SET name = 'Tango Bourges' WHERE id = 6");
        $this->addSql("UPDATE team SET name = 'Basket Landes' WHERE id = 7");
        $this->addSql("UPDATE team SET name = 'Flammes Carolo' WHERE id = 8");
        $this->addSql("UPDATE team SET name = 'Roche Vendée' WHERE id = 9");
        $this->addSql("UPDATE team SET name = 'ESBVA Lille' WHERE id = 10");
        $this->addSql("UPDATE team SET name = 'UF Angers' WHERE id = 11");
        $this->addSql("UPDATE team SET name = 'Charnay BBS' WHERE id = 12");
        $this->addSql("UPDATE team SET name = 'Pole Espoir' WHERE id = 13");
        $this->addSql("UPDATE team SET name = 'Chartres Basket' WHERE id = 14");
        $this->addSql("UPDATE team SET name = 'AS Aulnoye' WHERE id = 15");
        $this->addSql("UPDATE team SET name = 'Le Havre Basket' WHERE id = 16");
        $this->addSql("UPDATE team SET name = 'Cavigal Nice' WHERE id = 17");
        $this->addSql("UPDATE team SET name = 'USO Mondeville' WHERE id = 18");
        $this->addSql("UPDATE team SET name = 'Toulouse MB' WHERE id = 19");
        $this->addSql("UPDATE team SET name = 'BB La Tronche-Meylan' WHERE id = 20");
        $this->addSql("UPDATE team SET name = 'Feytiat Basket' WHERE id = 21");
        $this->addSql("UPDATE team SET name = 'BC Montbrison' WHERE id = 22");
        $this->addSql("UPDATE team SET name = 'USD Alençon' WHERE id = 23");
        $this->addSql("UPDATE team SET name = 'Pays Voironnais' WHERE id = 24");

        // Restaurer les anciens league_ids
        $this->addSql("UPDATE team SET league_id = 1 WHERE id IN (1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 14)");
        $this->addSql("UPDATE team SET league_id = 2 WHERE id IN (4, 13, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24)");
    }
}
