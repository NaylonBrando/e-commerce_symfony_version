<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $category = new Category();
        $category->setName('Technology');
        $category->setParentId(0);
        $manager->persist($category);
        $manager->flush();

        $category2 = new Category();
        $category2->setName('Phone');
        $category2->setParentId($category->getId());
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName('Laptop');
        $category3->setParentId($category->getId());
        $manager->persist($category3);
        $manager->flush();

        $this->addReference('technology', $category);
        $this->addReference('phone', $category2);
        $this->addReference('laptop', $category3);

    }
}
