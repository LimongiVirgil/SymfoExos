<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Beer;
use App\Entity\Country;
use App\Entity\Category;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        // Country //
        $countries = ['belgium', 'french', 'English', 'germany'];
        $countriesName = [];

        foreach ($countries as $countryName) {
            $country = new Country();
            $country->setName($countryName);
            $country->setAddress($faker->streetAddress());
            $country->setEmail($faker->email());

            $manager->persist($country);

            $countriesName[] = $country;
        }

        // Category //
        // catégories normals
        $categoriesNormals = ['blonde', 'brune', 'blanche'];
        $categoriesNormalsInst = [];

        // catégories specials
        $categoriesSpecials = ['houblon', 'rose', 'menthe', 'grenadine', 'réglisse', 'marron', 'whisky', 'bio'];
        $categoriesSpecialsInst = [];

        foreach ($categoriesNormals as $categoryNormal) {
            $category = new Category();

            $category->setName($categoryNormal);

            $manager->persist($category);

            $categoriesNormalsInst[] = $category;
        }

        foreach ($categoriesSpecials as $categorySpecials) {
            $category = new Category();

            $category->setName($categorySpecials);
            $category->setTerm('special');

            $manager->persist($category);

            $categoriesSpecialsInst[] = $category;
        }

        // Beer //
        for ($i = 0; $i < 10; $i++) {

            $beer = new Beer();
            $beer->setName($faker->name);
            $beer->setDescription($faker->text);
            $beer->setPublishedAt($faker->dateTime('now', 'UTC'));
            $beer->setPrice(rand(5, 30 ) * 1.12);
            $beer->setDegree(rand(3, 12 ) * 1.12);
            $beer->addCategory($categoriesNormalsInst[ rand(0, count($categoriesNormalsInst) - 1) ]);

            //add special category
            $randomCounter = rand(1, count($categoriesSpecialsInst));
            $copiedArray = $categoriesSpecialsInst;
            for ($x = $randomCounter; $x > 0; $x--) {
                $index = rand(0, count($copiedArray) - 1);
                $beer->addCategory($copiedArray[ $index ]);
                array_splice($copiedArray, $index, 1);
            }

            switch ($i) {
                case 0:
                    $beer->setCountry($countriesName[$i]);
                    break;
                case 1:
                    $beer->setCountry($countriesName[$i]);
                    break;
                case 2:
                    $beer->setCountry($countriesName[$i]);
                    break;
                case 3:
                    $beer->setCountry($countriesName[$i]);
                    break;
                default:
                    $beer->setCountry($countriesName[rand(0, 3)]);
            }

            $manager->persist($beer);
        }

        $manager->flush();
    }
}
