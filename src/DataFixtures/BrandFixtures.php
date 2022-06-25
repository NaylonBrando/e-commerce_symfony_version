<?php

namespace App\DataFixtures;

use App\Entity\Brand;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BrandFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $brand = new Brand();
        $brand->setName('Apple');
        $manager->persist($brand);

        $brand2 = new Brand();
        $brand2->setName('Samsung');
        $manager->persist($brand2);

        $manager->flush();

        $this->addReference('apple', $brand);
        $this->addReference('samsung', $brand2);
        
    }
}
