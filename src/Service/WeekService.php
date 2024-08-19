<?php

// src/Service/WeekService.php

namespace App\Service;

use App\Entity\Week;
use Doctrine\Persistence\ManagerRegistry;

class WeekService
{
    private $doctrine;

    private $datesLimites = [
        1 => '2024-09-21 19:00:00',  // Semaine 1
        2 => '2024-09-28 17:00:00',  // Semaine 2
        3 => '2024-10-05 19:00:00',  // Semaine 3
        4 => '2024-10-12 17:00:00',  // Semaine 4
        5 => '2024-10-26 19:00:00',  // Semaine 5
        6 => '2024-11-02 17:00:00',  // Semaine 6
        7 => '2024-11-09 17:00:00',  // Semaine 7
        8 => '2024-11-16 19:00:00',  // Semaine 8
        9 => '2024-11-30 19:00:00',  // Semaine 9
        10 => '2024-12-07 17:00:00', // Semaine 10
        11 => '2025-01-11 19:00:00', // Semaine 11

        12 => '2025-01-18 17:00:00', // Semaine 12
        13 => '2025-02-01 19:00:00', // Semaine 13
        14 => '2025-02-08 17:00:00', // Semaine 14

        15 => '2025-02-22 19:00:00', // Semaine 15
        16 => '2025-03-01 17:00:00', // Semaine 16
        17 => '2025-03-08 19:00:00', // Semaine 17
        18 => '2025-03-22 19:00:00', // Semaine 18
        19 => '2025-03-29 17:00:00', // Semaine 19
        20 => '2025-04-12 17:00:00', // Semaine 20
        21 => '2025-04-19 19:00:00', // Semaine 21
        22 => '2025-05-03 17:00:00', // Semaine 22

        23 => '2024-09-21 19:00:00',  // Semaine 1
        24 => '2024-09-28 17:00:00',  // Semaine 2
        25 => '2024-10-05 19:00:00',  // Semaine 3
        26 => '2024-10-12 17:00:00',  // Semaine 4
        27 => '2024-10-26 19:00:00',  // Semaine 5
        28 => '2024-11-02 17:00:00',  // Semaine 6
        29 => '2024-11-09 17:00:00',  // Semaine 7
        30 => '2024-11-16 19:00:00',  // Semaine 8
        31 => '2024-11-30 19:00:00',  // Semaine 9
        32 => '2024-12-07 17:00:00',  // Semaine 10
        33 => '2025-01-11 19:00:00',  // Semaine 11
        34 => '2025-01-18 17:00:00',  // Semaine 12
        35 => '2025-02-01 19:00:00',  // Semaine 13
        36 => '2025-02-08 17:00:00',  // Semaine 14
        37 => '2025-02-22 19:00:00',  // Semaine 15
        38 => '2025-03-01 17:00:00',  // Semaine 16
        39 => '2025-03-08 19:00:00',  // Semaine 17
        40 => '2025-03-22 19:00:00',  // Semaine 18
        41 => '2025-03-29 17:00:00',  // Semaine 19
        42 => '2025-04-12 17:00:00',  // Semaine 20
        43 => '2025-04-19 19:00:00',  // Semaine 21
        44 => '2025-05-03 17:00:00',  // Semaine 22
        
    ];

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getWeeksData(): array
    {
        $weekRepository = $this->doctrine->getRepository(Week::class);

        $weeksLF2 = $weekRepository->findBy(['league' => '2']);
        $weeksLFB = $weekRepository->findBy(['league' => '1']);

        return [
            'weeksLF2' => $weeksLF2,
            'weeksLFB' => $weeksLFB,
        ];
    }

    public function getDeadlineForWeek(int $weekId): string
    {
        return $this->datesLimites[$weekId] ?? '';
    }
}
