<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
  public function load(ObjectManager $manager): void
  {
    $movies = new Movie();
    $movies->setTitle('The Dark Knight');
    $movies->setReleaseYear(2008);
    $movies->setDescription("A gang of criminals rob a Gotham City mob bank; the Joker manipulates them into murdering each other for a higher share until only he remains and escapes with the money. Batman, District Attorney Harvey Dent and Lieutenant Jim Gordon form an alliance to rid Gotham of organized crime. Bruce Wayne is impressed with Dent's idealism and offers to support his career; he believes that, with Dent as Gotham's protector, he can give up being Batman and lead a normal life with Rachel Dawes—even though she and Dent are dating.

Mob bosses Sal Maroni, Gambol, and the Chechen hold a videoconference with their corrupt accountant, Lau, who has hidden their funds for safekeeping and fled to Hong Kong. The Joker warns them that Batman is unhindered by the law, and offers to kill him in exchange for half their money. After Joker kills Gambol and takes over his gang, the mob accepts his offer.

Batman finds Lau and brings him back to Gotham to testify, allowing Dent to apprehend the entire mob. The Joker threatens a string of murders unless Batman reveals his identity, and starts by killing Police Commissioner Gillian B. Loeb and Judge Surrillo. He targets the mayor but Gordon sacrifices himself to stop the assassination. Rachel is the next target.

Bruce plans to reveal his identity to stop the murders but Dent, refusing to allow him to do so, announces that he is Batman instead. Dent is taken into custody and the Joker attacks the convoy. Batman and Gordon, who faked his death, rescue Dent and apprehend the Joker. Rachel and Dent are kidnapped and the Joker reveals that they are in separate locations rigged with explosives. Batman races to save Rachel while Gordon attempts to rescue Dent. Batman realizes too late that the Joker sent him to Dent's location instead. Both buildings explode, killing Rachel and disfiguring half of Dent's face. The Joker escapes with Lau, whom he kills along with the Chechen.

Coleman Reese, an accountant at Wayne Enterprises, deduces that Bruce is Batman and tries to go public with the information. Not wanting Reese's revelation to interfere with his plans, the Joker threatens to destroy a hospital unless Reese is killed within the hour. The Joker convinces a disillusioned Dent to seek revenge for Rachel's death, then destroys the hospital. Dent goes on a killing spree as the vigilante Two-Face, targeting those he holds responsible for Rachel's death.

After announcing Gotham will be subject to his rule come nightfall, the Joker rigs two ferries with explosives, one containing civilians and the other prisoners. He threatens to blow them both up but will let one ferry live if its passengers blow up the other. Batman finds the Joker by exploiting the sonar capabilities of all the phones in the city. The civilians and the prisoners refuse to kill each other, proving that Gotham still has hope in good. As SWAT takes the Joker into custody, he gloats that Gotham's citizens will lose hope once the admired Dent's rampage becomes public knowledge.

Gordon and Batman encounter Two-Face, who has held Gordon's family as hostages. Two-Face shoots Batman and threatens to kill Gordon's son, claiming that Gordon's negligence is responsible for Rachel's death. Batman tackles Two-Face off the building to his death. He persuades Gordon to hold him responsible for Dent's killing spree to preserve Dent's heroic image, believing Dent is the hero Gotham needs right now. Dent is hailed as a hero and the police launch a manhunt for Batman, with Gordon unwillingly destroying the Bat-signal.");
    $movies->setImagePath("https://cdn.pixabay.com/photo/2021/06/18/11/22/batman-6345897_960_720.jpg");

    // add Data into pivot tables
    $movies->addActor($this->getReference('actor'));
    $movies->addActor($this->getReference('actor_1'));
    $movies->addActor($this->getReference('actor_2'));
    $movies->addActor($this->getReference('actor_3'));
    $movies->addActor($this->getReference('actor_4'));
    $movies->addActor($this->getReference('actor_5'));
    $movies->addActor($this->getReference('actor_6'));
    $manager->persist($movies);

    $movies2 = new Movie();
    $movies2->setTitle('Avengers: Endgame');
    $movies2->setReleaseYear(2020);
    $movies2->setDescription("In 2018, twenty-three days after Thanos killed half of all life in the universe,[N 1] Carol Danvers rescues Tony Stark and Nebula from deep space and they reunite with the remaining Avengers—Bruce Banner, Steve Rogers, Thor, Natasha Romanoff, and James Rhodes—and Rocket on Earth. Locating Thanos on an uninhabited planet, they plan to use the Infinity Stones to reverse his actions, but discover Thanos has already destroyed them to prevent further use. Enraged, Thor decapitates Thanos.

Five years later, in 2023, Scott Lang escapes from the Quantum Realm.[N 2] Reaching the Avengers Compound, he explains that he experienced only five hours while trapped. Theorizing the Quantum Realm allows time travel, they ask Stark to help them retrieve the Stones from the past to reverse the actions of Thanos in the present. Stark, Rocket, and Banner, who has since merged his intelligence with the Hulk's strength, build a time machine. Banner notes that altering the past does not affect their present; any changes create alternate realities. Banner and Rocket travel to Norway, where they visit the Asgardian refugees' settlement New Asgard and recruit an overweight and despondent Thor. In Tokyo, Romanoff recruits Clint Barton, who became a vigilante after the death of his family.

Banner, Lang, Rogers, and Stark time-travel to New York City during Loki's attack in 2012.[N 3] At the Sanctum Sanctorum, Banner convinces the Ancient One to give him the Time Stone after promising to return the various Stones to their proper points in time. At Stark Tower, Rogers retrieves the Mind Stone from Hydra sleeper agents, but Stark and Lang's attempt to steal the Space Stone fails, allowing 2012-Loki to escape with it. Rogers and Stark travel to Camp Lehigh in 1970, where Stark obtains an earlier version of the Space Stone and encounters his father, Howard. Rogers steals Pym Particles from Hank Pym to return to the present and spies his lost love, Peggy Carter.

Meanwhile, Rocket and Thor travel to Asgard in 2013;[N 4] Rocket extracts the Reality Stone from Jane Foster, while Thor gets encouragement from his mother, Frigga, and retrieves his old hammer, Mjolnir. Barton, Romanoff, Nebula, and Rhodes travel to 2014; Nebula and Rhodes go to Morag and steal the Power Stone before Peter Quill can,[N 5] while Barton and Romanoff travel to Vormir. The Soul Stone's keeper, Red Skull, reveals it can only be acquired by sacrificing a loved one. Romanoff sacrifices herself, allowing Barton to get the Stone. Rhodes and Nebula attempt to return to their own time, but Nebula is incapacitated when her cybernetic implants link with her past self, allowing 2014-Thanos to learn of his future self's success and the Avengers' attempt to undo it. 2014-Thanos sends 2014-Nebula forward in time to prepare for his arrival.

Reuniting in the present, the Avengers place the Stones into a gauntlet that Stark, Banner, and Rocket had built. Banner, having the most resistance to their radiation, wields the gauntlet and reverses Thanos's disintegrations. Meanwhile, 2014-Nebula, impersonating her future self, uses the time machine to transport 2014-Thanos and his warship to the present, which he then uses to destroy the Avengers Compound. Present-day Nebula convinces 2014-Gamora to betray Thanos, but is unable to convince 2014-Nebula and kills her. Thanos overpowers Stark, Thor, and a Mjolnir-wielding Rogers and summons his army to retrieve the Stones, intent on using them to destroy the universe and create a new one. A restored Stephen Strange arrives with other sorcerers, the restored Avengers and Guardians of the Galaxy, the Ravagers, and the armies of Wakanda and Asgard to fight Thanos's army. Danvers also arrives and destroys Thanos's warship, but Thanos overpowers her and seizes the gauntlet. Stark steals the Stones and uses them to disintegrate Thanos and his army, at the cost of his life.

Following Stark's funeral, Thor appoints Valkyrie as the new ruler of New Asgard and joins the Guardians. Rogers returns the Stones and Mjolnir to their proper timelines and remains in the past to live with Carter. In the present, an elderly Rogers passes his shield to Sam Wilson.

");
    $movies2->setImagePath("https://en.wikipedia.org/wiki/File:Avengers_Endgame_poster.jpg");
    // add Data into pivot tables
    $movies2->addActor($this->getReference('actor_6'));
    $movies2->addActor($this->getReference('actor_7'));
    $movies2->addActor($this->getReference('actor_8'));
    $movies2->addActor($this->getReference('actor_9'));
    $movies2->addActor($this->getReference('actor_10'));
    $movies2->addActor($this->getReference('actor_11'));
    $movies2->addActor($this->getReference('actor_12'));

    $manager->persist($movies);

    $manager->persist($movies2);

    $manager->flush();
  }
}
