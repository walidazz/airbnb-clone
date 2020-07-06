<?php

namespace App\Controller;

use App\Service\StatService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    /**
     * @Route("/admin/", name="admin_dashboard")
     */
    public function index(StatService $stat)
    {

   $stats = $stat->getStats();
   $bestAnnonce = $stat->getAnnonceByOrder('DESC');
    $worstAnnonce = $stat->getAnnonceByOrder('ASC');  

        return $this->render('admin/dashboard/index.html.twig', [
            'stats' => $stats,
            'bestAnnonce' => $bestAnnonce,
            'worstAnnonce' => $worstAnnonce
        ]);
    }
}
