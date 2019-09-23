<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        for($i = 0; $i < 10; $i ++){

            $property = new Property();
            $property->setTitle('Maison de luxe')
                    ->setDescription('lOREM IPSUM DELEDO IT UTIRUU DEJ JD kdkek odkeo djeidj iej')
                    ->setSurface(20)
                    ->setRooms(2)
                    ->setBedrooms(3)
                    ->setFloor(2)
                    ->setPrice(222000)
                    ->setHeat(1)
                    ->setCity('Douvaine')
                    ->setAddress('151 chemins du levants')
                    ->setPostalCode('45545')
                    ->setSold(false);
            
            $manager->persist($property);

        }

        $manager->flush();
    }
}
