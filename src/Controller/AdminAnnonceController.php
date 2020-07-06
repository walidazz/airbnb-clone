<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Form\AnnonceType;
use App\Repository\AnnonceRepository;
use App\Service\PaginationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminAnnonceController extends AbstractController
{
    /**
     * @Route("/admin/annonces/{page<\d+>?1}", name="admin_annonce_index")
     */
    public function index($page, PaginationService $pagination)
    {
        $pagination->setEntityClass(Annonce::class)
        ->setPage($page);



        return $this->render('admin/annonce/index.html.twig', [
            'pagination' => $pagination,
   
        ]);
    }

    /**
     * @Route("/admin/annonces/{slug}/edit", name="admin_annonce_edit")
     */
    public function edit(Annonce $annonce, EntityManagerInterface $manager, Request $request)
    {
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($annonce);
            $manager->flush();
            $this->addFlash('success', 'modification effectué avec succes !');
        }

        return $this->render('admin/annonce/edit.html.twig', [
            'form' => $form->createView(),
            'annonce' => $annonce
        ]);
    }





    /**
     * @Route("/admin/annonces/{slug}/delete", name="admin_annonce_delete")
     */
    public function delete(Annonce $annonce, EntityManagerInterface $manager)
    {
        if (count($annonce->getBookings()) > 0) {
            $this->addFlash('warning', "Vous ne pouvez pas suppimer l'annonce {$annonce->getTitle()} car des réservations ont été faites !");
        } else {
            $manager->remove($annonce);
            $manager->flush();
            $this->addFlash('success', "l'annonce {$annonce->getTitle()} a été supprimée ");
        }
        return $this->redirectToRoute('admin_annonce_index');
    }
}
