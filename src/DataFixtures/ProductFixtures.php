<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setTitle('IPhone X');
        $product->setSlug('iphone-x');
        $product->setPrice(1000);
        $product->setQuantity(100);
        $product->setStockNumber(1);
        $product->setDescription('Apple iPhone X is a line of smartphones designed and marketed by Apple Inc. It is the latest model of the iPhone series, succeeding the iPhone XS and iPhone XS Max.');
        $product->setBrand($this->getReference('apple'));
        $product->addCategory($this->getReference('phone'));
        $manager->persist($product);

        $product2 = new Product();
        $product2->setTitle('Samsung Galaxy S10');
        $product2->setSlug('samsung-galaxy-s10');
        $product2->setPrice(900);
        $product2->setQuantity(100);
        $product2->setStockNumber(2);
        $product2->setDescription('Samsung Galaxy S10 is a line of smartphones designed and marketed by Samsung Electronics. It is the latest model of the Samsung Galaxy S series, succeeding the Samsung Galaxy S10+ and Samsung Galaxy S10+.');
        $product2->setBrand($this->getReference('samsung'));
        $product2->addCategory($this->getReference('phone'));
        $manager->persist($product2);

        $product3 = new Product();
        $product3->setTitle('MacBook Pro');
        $product3->setSlug('macbook-pro');
        $product3->setPrice(1200);
        $product3->setQuantity(100);
        $product3->setStockNumber(3);
        $product3->setDescription('MacBook Pro is a line of notebook computers designed, developed, and marketed by Apple Inc. It is the latest generation of the MacBook family of notebook computers, the first of which was released in September 2006.');
        $product3->setBrand($this->getReference('apple'));
        $product3->addCategory($this->getReference('laptop'));
        $manager->persist($product3);

        $product4 = new Product();
        $product4->setTitle('Samsung Laptop');
        $product4->setSlug('samsung-laptop');
        $product4->setPrice(900);
        $product4->setQuantity(100);
        $product4->setStockNumber(4);
        $product4->setDescription('Samsung Laptop is a line of laptops designed and marketed by Samsung Electronics. It is the latest model of the Samsung series, succeeding the Samsung Laptop S10+ and Samsung Laptop S10+.');
        $product4->setBrand($this->getReference('samsung'));
        $product4->addCategory($this->getReference('laptop'));
        $manager->persist($product4);

        $manager->flush();

        $this->addReference('iphoneX', $product);
        $this->addReference('samsung10', $product2);
        $this->addReference('macbookPro', $product3);
        $this->addReference('samsungLaptop', $product4);
    }
}
