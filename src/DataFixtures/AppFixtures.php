<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $client = new Client();

        $client->setPrenom('Sébastien');
        $client->setNom('Hochuli');
        $manager->persist($client);

        $manager->flush();
    }
}
