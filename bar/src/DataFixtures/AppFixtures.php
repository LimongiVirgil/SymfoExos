<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Beer;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = Faker\Factory::create('fr_FR');

        // create 20 beer! Bam!
        for ($i = 0; $i < 20; $i++) {
            $beer = new Beer();
            $beer->setName($faker->name);
            $beer->setDescription($faker->text);
            $beer->setPublishedAt($faker->dateTime());
            $beer->setDegree(rand(5,30));
            $beer->setPrice(rand(10,40));

            $manager->persist($beer);
        }

        $manager->flush();
    }
}
