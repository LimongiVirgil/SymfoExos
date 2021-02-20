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
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {

            $beer = new Beer();
            $beer->setName($faker->name);
            $beer->setDescription($faker->text);
            $beer->setPublishedAt($faker->dateTime('now', 'UTC'));

            $manager->persist($beer);
        }

        $manager->flush();
    }
}
