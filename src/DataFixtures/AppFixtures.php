<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actor = new Actor();
        $actor->setName('Christian Bale');
        $manager->persist($actor);


        $actor1 = new Actor();
        $actor1->setName('Morgan Freeman');
        $manager->persist($actor1);

        $actor2 = new Actor();
        $actor2->setName('Micheal Caine');
        $manager->persist($actor2);

        $actor3 = new Actor();
        $actor3->setName('Heath Ledger');
        $manager->persist($actor3);

        $actor4 = new Actor();
        $actor4->setName('Eric Rober');
        $manager->persist($actor4);

        $actor5 = new Actor();
        $actor5->setName('Chin Han');
        $manager->persist($actor5);

        $actor6 = new Actor();
        $actor6->setName('Margie Gyllenhaal');
        $manager->persist($actor6);

        $actor7 = new Actor();
        $actor7->setName('Robert Downey jr');
        $manager->persist($actor7);

        $actor8 = new Actor();
        $actor8->setName('Mark Rufalo');
        $manager->persist($actor8);

        $actor9 = new Actor();
        $actor9->setName('Scarlett Johansson');
        $manager->persist($actor9);

        $actor10 = new Actor();
        $actor10->setName('Chris Evans');
        $manager->persist($actor10);

        $actor11 = new Actor();
        $actor11->setName('Chris Hemsworth');
        $manager->persist($actor11);

        $actor12 = new Actor();
        $actor12->setName('Jeremy Renner');
        $manager->persist($actor12);


        // $manager->persist($product);

        $manager->flush();

        $this->addReference('actor', $actor);
        $this->addReference('actor_1', $actor1);
        $this->addReference('actor_2', $actor2);
        $this->addReference('actor_3', $actor3);
        $this->addReference('actor_4', $actor4);
        $this->addReference('actor_5', $actor5);
        $this->addReference('actor_6', $actor6);
        $this->addReference('actor_7', $actor7);
        $this->addReference('actor_8', $actor8);
        $this->addReference('actor_9', $actor9);
        $this->addReference('actor_10', $actor10);
        $this->addReference('actor_11', $actor11);
        $this->addReference('actor_12', $actor12);
    }
}
