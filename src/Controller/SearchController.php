<?php

namespace App\Controller;

use App\Entity\Search;
use App\Entity\Annonce;
use App\Form\SearchType;
use App\Repository\AnnonceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function searchBar(Request $request ,AnnonceRepository $repo)
    {
      $searchAnnonceForm = $this->createForm(TextType::class);
      $search = $searchAnnonceForm->handleRequest($request)->getData(); 
      if($searchAnnonceForm->isSubmitted() && $searchAnnonceForm->isValid()){
       $annonces = $repo->findLike($search);
            return $this->render('search/index.html.twig', [
                'annonces' => $annonces,
            ]); 
       
      }
        return $this->render('search/form.html.twig', [
            'form' => $searchAnnonceForm->createView(),
            ]); 


    }
}