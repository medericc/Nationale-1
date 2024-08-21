<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240821143559 extends AbstractMigration
{
   
    public function up(Schema $schema): void
    {
        // Insert players for team IDs 14 to 24
        $this->addSql("
            INSERT INTO player (forename, name, team_id, rating, selected) VALUES
            ('Djefarima', 'Diawara', 14, 0, 0),
            ('Melissa', 'Mendes', 14, 0, 0),
            ('Amance', 'Kerbaul', 14, 0, 0),
            ('Julie', 'Cossais', 14, 0, 0),
            ('Mila', 'Marquet', 14, 0, 0),
            ('Zarah', 'Velleyen', 14, 0, 0),
            ('Jade', 'Ferre', 14, 0, 0),
            ('Effa', 'Mfegue', 14, 0, 0),
            ('Justine', 'Barthelemy', 14, 0, 0),

            ('Jenny', 'Fouasseau', 15, 0, 0),
            ('Lya', 'Farcy', 15, 0, 0),
            ('Awa', 'Nianghane', 15, 0, 0),
            ('Maty', 'Fall', 15, 0, 0),
            ('Helena', 'Delaruelle', 15, 0, 0),
            ('Lisa', 'Dufon', 15, 0, 0),
            ('Genesia', 'Mayele', 15, 0, 0),
            ('Maeva', 'Guehi', 15, 0, 0),
            ('Ludivine', 'Marie', 15, 0, 0),
            ('Hermine', 'Ngueko', 15, 0, 0),

            ('Margot', 'Dubreucq', 16, 0, 0),
            ('Camille', 'De Sousa', 16, 0, 0),
            ('Margot', 'Busignies', 16, 0, 0),
            ('Angelina', 'Martini', 16, 0, 0),
            ('Ines', 'Salahy', 16, 0, 0),
            ('Ginette', 'Mfutila', 16, 0, 0),
            ('Maelys', 'Mpasi', 16, 0, 0),
            ('Justine', 'Wallez', 16, 0, 0),
            ('Aminata', 'Zie', 16, 0, 0),
            ('Jasmine', 'Gill', 16, 0, 0),

            ('Fleur', 'Morel', 17, 0, 0),
            ('Stella', 'Kessler', 17, 0, 0),
            ('Khadidiatou', 'Diouf', 17, 0, 0),
            ('Karisma', 'Ortiz', 17, 0, 0),
            ('Carla', 'M\'Baye', 17, 0, 0),
            ('Lauryn', 'Vieira', 17, 0, 0),
            ('Margot', 'Ounounou', 17, 0, 0),

            ('Imane', 'El Guarti', 18, 0, 0),
            ('Ines', 'Sequeira', 18, 0, 0),
            ('Anaelle', 'Le Bruchec', 18, 0, 0),
            ('Alice', 'Ekambi', 18, 0, 0),
            ('Jade', 'Pruvost', 18, 0, 0),
            ('Fanta', 'Sanogo', 18, 0, 0),
            ('Jamia', 'Hollings', 18, 0, 0),
            ('Verdine', 'Warner', 18, 0, 0),

            ('Melanie', 'Devaux', 19, 0, 0),
            ('Lucile', 'Bissuel', 19, 0, 0),
            ('Aminata', 'Dosso', 19, 0, 0),
            ('Meg', 'Pedroso', 19, 0, 0),
            ('Anouk', 'Piotrowski', 19, 0, 0),
            ('Adele', 'Landuré', 19, 0, 0),
            ('Assitan', 'Traoré', 19, 0, 0),
            ('Elsa', 'Le Bras', 19, 0, 0),
            ('Lucie', 'Carlier', 19, 0, 0),
            ('Madelyn', 'Batista', 19, 0, 0),

            ('Haby', 'Niang', 20, 0, 0),
            ('Tahina', 'Dieujuste', 20, 0, 0),
            ('Laura', 'Lhuillier', 20, 0, 0),
            ('Lola', 'Colombani', 20, 0, 0),
            ('Sarah', 'Nanguy', 20, 0, 0),
            ('Lidsey', 'Mahoukou', 20, 0, 0),
            ('Hermance', 'Marti', 20, 0, 0),
            ('Japonica', 'James', 20, 0, 0),

            ('Minata', 'Traoré', 22, 0, 0),
            ('Maeva', 'Kitantou', 22, 0, 0),
            ('Laura', 'Dos Santos', 22, 0, 0),
            ('Cléa', 'Behey', 22, 0, 0),
            ('Lolita', 'Doyer', 22, 0, 0),
            ('Mona', 'El Bakkouche', 22, 0, 0),
            ('Natalia', 'Farkasova', 22, 0, 0),
            ('Alanis', 'Thiebac', 22, 0, 0),
            ('Victorine', 'Thiaw', 22, 0, 0),
            ('Assita-Annie', 'Diaby', 22, 0, 0),

            ('Cynthia', 'Jourdan', 24, 0, 0),
            ('Fatoumata', 'Traoré', 24, 0, 0),
            ('Kaina', 'Norbert', 24, 0, 0),
            ('Kerryne', 'Bright Aman', 24, 0, 0),
            ('Alex Anne', 'Deschamps', 24, 0, 0),
            ('Dorcas', 'Nganfina', 24, 0, 0),
            ('Ramata', 'Daou', 24, 0, 0),
            ('Leane', 'Lemaire', 24, 0, 0),
            ('Yaye', 'Daba', 24, 0, 0),
            ('Lovely', 'Claire', 24, 0, 0),
            ('Nohea', 'Stoelzaed', 24, 0, 0),
            ('Mwinda', 'Mukenge', 24, 0, 0);
        ");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
