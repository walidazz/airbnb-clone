<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Form\AnnonceType;
use Cocur\Slugify\Slugify;
use App\Repository\AnnonceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonces", name="annonces")
     */
    public function index(AnnonceRepository $repo)
    {

        $annonces = $repo->findAll();
        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces,
        ]);
    }


    /**
     * @Route("/annonce/create", name="annonce_create")
     * @Route("/annonce/edit/{id}", name="annonce_edit")
     * @Security("is_granted('ROLE_USER') ")
     */
    public function create(Annonce $annonce = null, Request $request, EntityManagerInterface $manager)
    {
        if (!$annonce) {
            $annonce = new Annonce();
            $create = true;
        } else {
            $create = false;
        }
        $slugify = new Slugify();
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $annonce->setSlug($slugify->slugify($annonce->getTitle()));
            $annonce->setAuthor($this->getUser());
            $manager->persist($annonce);
            $manager->flush();
            $this->addFlash('success', 'Action effectué avec succès');

            return $this->redirectToRoute('annonce', [
                'slug' => $annonce->getSlug()
            ]);
        }
        /**
         * chapitre 6, épisode 8 {constraints} 
         */

        return $this->render('annonce/form.html.twig', ['form' => $form->createView(), 'create' => $create]);
    }



    /**
     * @Route("/annonce/{slug}", name="annonce")
     */
    public function single(Annonce $annonce)
    {

        return $this->render('annonce/single.html.twig', [
            'annonce' => $annonce,
        ]);
    }



    /**
     * @Route("/annonce/delete/{slug}", name="delete")
     * @Security("is_granted('ROLE_USER') and user == annonce.getAuthor()", message="Vous n'étes pas autorisé à faire cette action")
     */
    public function delete(Annonce $annonce, EntityManagerInterface $manager)
    {
        $manager->remove($annonce);
        $manager->flush();
        $this->addFlash('success', "l'annonce a été supprimé ! ");
        return $this->redirectToRoute('annonces');
    }
}
