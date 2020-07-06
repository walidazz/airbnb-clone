<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Entity\Booking;
use App\Entity\Comment;
use App\Form\BookingType;
use App\Form\CommentType;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookingController extends AbstractController
{
    /**
     * @Route("/annonce/{slug}/booking", name="booking_create")
     * @Security("is_granted('ROLE_USER') ")
     */
    public function book(Annonce $annonce, Request $request, EntityManagerInterface $entityManagerInterface)
    {
        $booking = new Booking();
        $form = $this->createForm(BookingType::class, $booking, [
            'validation_groups' => ['Default', 'front']
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $booking->setBooker($this->getUser());
            $booking->setAnnonce($annonce);
            $booking->setCreatedAt(new DateTime('now'));

            if (!$booking->isBookableDate()) {
                $this->addFlash('warning', 'ces dates ne sont pas disponible');
            } else {

                $entityManagerInterface->persist($booking);
                $entityManagerInterface->flush();
                $this->addFlash('success', 'Annonce réservé avec succès !');
                return $this->redirectToRoute('booking_show', ['id' => $booking->getId(), 'withAlert' => true]);
            }
        }
        return $this->render('booking/index.html.twig', [
            'annonce' => $annonce,
            'form' => $form->createView()
        ]);
    }

    /**
     * Chapitre 12 Gestion des commentaires , épisode 10
     */

    /**
     * @Route("/account/booking/{id}", name="booking_show")
     */
    public function bookingShow(Booking $booking, Request $request, EntityManagerInterface $manager)
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setAnnonce($booking->getAnnonce());
            $comment->setAuthor($this->getUser());
            $manager->persist($comment);
            $manager->flush();
            $this->addFlash('success', 'Commentaire envoyé');

            # code...
        }
        return $this->render('booking/bookingShow.html.twig', [
            'booking' => $booking,
            'form' => $form->createView()
        ]);
    }
}
