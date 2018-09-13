<?php declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\League;
use App\Entity\Team;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $objectManager)
    {
        $this->loadLaLiga($objectManager);
        $this->loadPremierLeague($objectManager);
    }

    private function loadLaLiga(ObjectManager $objectManager): void
    {
        $laLiga= new League('la-liga', 'Liga de Futbol Profesional');

        $barca = new Team('barca', 'FC Barcelona', 'blue and garnet');
        $realMadrid = new Team('real', 'Real Madrid C.F.', 'white');
        $atletico = new Team('atletico', 'Atletico Madrid', 'white, red and blue');

        $laLiga->addTeam($barca);
        $laLiga->addTeam($realMadrid);
        $laLiga->addTeam($atletico);

        $objectManager->persist($barca);
        $objectManager->persist($realMadrid);
        $objectManager->persist($atletico);
        $objectManager->persist($laLiga);
        $objectManager->flush();
    }

    private function loadPremierLeague(ObjectManager $objectManager): void
    {
        $premierLeague = new League('premier-league', 'Premier League');

        $tottenham = new Team('spurs', 'Tottenham Hotspur F.C.', 'white and navy blue');
        $arsenal = new Team('gunners', 'Arsenal F.C.', 'white and red');
        $chelsea = new Team('chelsea', 'Chelsea F.C.', 'white, blue and royal blue');

        $premierLeague->addTeam($tottenham);
        $premierLeague->addTeam($arsenal);
        $premierLeague->addTeam($chelsea);

        $objectManager->persist($tottenham);
        $objectManager->persist($arsenal);
        $objectManager->persist($chelsea);
        $objectManager->persist($premierLeague);
        $objectManager->flush();
    }
}