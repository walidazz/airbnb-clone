<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class StatService
{

    private $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function getUserCount()
    {

        $user = $this->manager->createQuery('SELECT COUNT(u) FROM App\Entity\User u')->getSingleScalarResult();

        return $user;
    }

    public function getAnnonceCount()
    {
        $annonce = $this->manager->createQuery('SELECT COUNT(a) FROM App\Entity\Annonce a')->getSingleScalarResult();


        return $annonce;
    }


    public function getBookingCount()
    {
        $booking = $this->manager->createQuery('SELECT COUNT(b) FROM App\Entity\Booking b')->getSingleScalarResult();
        return $booking;
    }

    public function getCommentCount()
    {
        $comment = $this->manager->createQuery('SELECT COUNT(c) FROM App\Entity\Comment c')->getSingleScalarResult();

        return $comment;
    }


    public function getBestAnnonce(){
        $bestAnnonce = $this->manager->createQuery(
            'SELECT AVG(c.rating) as note , a.title, a.id, u.firstName, u.lastName, u.picture
            FROM App\Entity\Comment c 
            JOIN c.annonce a 
            JOIN a.author u 
            GROUP by a
            ORDER BY note DESC'
        )->setMaxResults(5)->getResult();

return $bestAnnonce;
    }




    public function getAnnonceByOrder($order){
        $annonce = $this->manager->createQuery(
            'SELECT AVG(c.rating) as note , a.title, a.id, u.firstName, u.lastName, u.picture
            FROM App\Entity\Comment c 
            JOIN c.annonce a 
            JOIN a.author u 
            GROUP by a
            ORDER BY note ' .$order
        )->setMaxResults(5)->getResult();

        return $annonce;



    }

    public function getWorstAnnonce(){
        $worstAnnonce = $this->manager->createQuery(
            'SELECT AVG(c.rating) as note , a.title, a.id, u.firstName, u.lastName, u.picture
            FROM App\Entity\Comment c 
            JOIN c.annonce a 
            JOIN a.author u 
            GROUP by a
            ORDER BY note ASC'
        )->setMaxResults(5)->getResult();

return $worstAnnonce;
    }

    public function getStats(){
        $user = $this->getUserCount();
        $annonce = $this->getAnnonceCount();
        $booking = $this->getBookingCount();
        $comment = $this->getCommentCount();
        return compact('user','annonce','booking','comment');
    }
}
