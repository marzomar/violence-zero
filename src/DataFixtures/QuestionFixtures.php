<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class QuestionFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $question = new Question();
        $question->setText('Are you fine ?');
        $question->setLevel(1);
        $manager->persist($question);

        $question = new Question();
        $question->setText('Are you Ok ?');
        $question->setLevel(2);
        $manager->persist($question);
        

        $manager->flush();
    }
}
