<?php

namespace App\Controller;

use App\Repository\AnnonceRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GlobalController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(AnnonceRepository $repo, UserRepository $userRepo)
    {
        $annonces = $repo->findBestAnnonces(3);
        $users = $userRepo->findBestUsers(4);

        return $this->render('global/index.html.twig', [
            'annonces' => $annonces,
            'users' => $users
        ]);
    }
 
}
