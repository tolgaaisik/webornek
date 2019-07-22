<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
    	for ($i=0; $i <10 ; $i++) { 
    		$Dummy= new Dummy();
    		$Dummy->setText('Som random txt' .rand(0, 100));
    		$Dummy->setTime(new \DateTime(time: '2019-07-22'));
    		$manager->persist($Dummy)
    		# code...
    	}
        $manager->flush();
    }
}
