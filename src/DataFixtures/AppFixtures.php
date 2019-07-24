<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $this->loadMicroPosts($manager);
        $this->loadUsers($manager);
    }

    private function loadMicroPosts(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $Article = new Article();
            $Article->setText(
                'Some random text '.rand(
                    0,
                    100
                )
            );
            $Article->setTime(new \DateTime('2018-03-15'));
            $manager->persist($microPost);
        }

        $manager->flush();
    }

    private function loadUsers(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('john_doe');
        $user->setFullName('John Doe');
        $user->setEmail('john_doe@doe.com');
        $user->setPassword(
            $this->passwordEncoder->encodePassword(
                $user,
                'john123'
            )
        );

        $manager->persist($user);
        $manager->flush();
    }
}