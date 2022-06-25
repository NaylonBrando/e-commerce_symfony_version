<?php

namespace App\DataFixtures;

use App\Entity\ProductImage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductImageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $productImage = new ProductImage();
        $productImage->setPath('https://cdn.cimri.io/image/1000x1000/apple-iphone-x-256-gb-58-inc-12-mp-akilli-cep-telefonu-_90812642.jpg');
        $productImage->setProduct($this->getReference('iphoneX'));
        $manager->persist($productImage);

        $productImage2 = new ProductImage();
        $productImage2->setPath('https://cdn.cimri.io/image/1000x1000/samsunggalaxysgbgbraminmpmpmparkakameralakllceptelefonu_135308313.jpg');
        $productImage2->setProduct($this->getReference('samsung10'));
        $manager->persist($productImage2);

        $productImage3 = new ProductImage();
        $productImage3->setPath('https://cdn.cimri.io/image/1000x1000/applemacbookpromkgptuaapplemprogbramgbssdinuzaygrisilaptopnotebook_489524563.jpg');
        $productImage3->setProduct($this->getReference('macbookPro'));
        $manager->persist($productImage3);

        $productImage4 = new ProductImage();
        $productImage4->setPath('https://cdn.cimri.io/image/1000x1000/samsung-xe930qca-k02-laptop-gri_290118801.jpg');
        $productImage4->setProduct($this->getReference('samsungLaptop'));
        $manager->persist($productImage4);

        $manager->flush();

    }
}
