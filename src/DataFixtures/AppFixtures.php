<?php

namespace App\DataFixtures;

use DateTime;
use Faker\Factory;
use App\Entity\Role;
use App\Entity\User;
use App\Entity\Image;
use App\Entity\Annonce;
use App\Entity\Booking;
use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;


    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }


    public function load(ObjectManager $manager)
    {

        $faker = Factory::create('FR-fr');

        $adminRole = new Role();
        $adminRole->setTitle('ROLE_ADMIN');
        $manager->persist($adminRole);
        $genres = ['male', 'female'];
        $genre = $faker->randomElement($genres);


        $adminUser = new User();
        $adminUser->setLastName($faker->lastName($genre))
            ->setFirstName($faker->firstName($genre))
            ->setEmail('walidazzimani@outlook.com')
            ->setIntroduction($faker->sentence())
            ->setDescription($faker->sentence())
            ->setPicture('https://i.picsum.photos/id/32/200/300.jpg')
            ->addUserRole($adminRole)
            ->setHash($this->encoder->encodePassword($adminUser, 'Tolerance0'));
        $manager->persist($adminUser);




        $title = $faker->sentence();
        $coverImage = $faker->imageUrl(1000, 350);
        $introduction = $faker->paragraph(2);
        $content = '<p> ' . join('</p><p>', $faker->paragraphs(5)) . '</p>';


        $users = [];


        for ($i = 0; $i < 10; $i++) {
            $user = new User();

            $randomInt = random_int(1, 99);
            $picture = 'https://randomuser.me/api/portraits/' . $genre . '/' . $randomInt . '.jpg';

            $hash = $this->encoder->encodePassword($user, 'password');

            $user->setLastName($faker->lastName($genre))
                ->setFirstName($faker->firstName($genre))
                ->setEmail($faker->email())
                ->setIntroduction($faker->sentence())
                ->setDescription($faker->sentence())
                ->setPicture($picture)
                ->setRoles('ROLE_USER')
                ->setHash($hash);
            $manager->persist($user);
            $users[] = $user;
        }

        $user = $users[mt_rand(0, count($users) - 1)];

        for ($i = 0; $i < 50; $i++) {


            $annonce = new Annonce();
            $annonce->setTitle($title)
                ->setIntroduction($introduction)
                ->setCoverImage($coverImage)
                ->setContent($content)
                ->setPrice(mt_rand(40, 200))
                ->setRooms(mt_rand(3, 6))
                ->setAuthor($user);


            for ($j = 0; $j <= mt_rand(3, 6); $j++) {
                $image = new Image();
                $image->setCaption($faker->sentence())
                    ->setUrl($faker->imageUrl())
                    ->setRelation($annonce);
                $manager->persist($image);
            }


            $manager->persist($annonce);

            for ($m = 1; $m < mt_rand(50, 100); $m++) {
                $booking = new Booking();
                $duration = mt_rand(3, 10);
                $createdAt = $faker->dateTimeBetween('-6 months');
                $startDate = $faker->dateTimeBetween('-3 months');
                $duration = mt_rand(3, 10);
                $endDate = (clone $startDate)->modify("+$duration days");
                $amount = $annonce->getPrice() * $duration;
                $booker = $users[mt_rand(0, count($users) - 1)];
                $comment = $faker->sentence();
                $booking->setBooker($booker)
                    ->setAnnonce($annonce)
                    ->setStartDate($startDate)
                    ->setCreatedAt($createdAt)
                    ->setEndDate($endDate)
                    ->setAmount($amount)
                    ->setComment($comment);
                $manager->persist($booking);

                if (mt_rand(0, 1)) {
                    $comment = new Comment();
                    $comment->setContent($faker->paragraph())
                        ->setAuthor($booker)
                        ->setRating(mt_rand(0, 5))
                        ->setAnnonce($annonce);
                    $manager->persist($comment);
                }
            }
        }


        $manager->flush();
    }
}
