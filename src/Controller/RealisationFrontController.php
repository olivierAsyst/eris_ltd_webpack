<?php

namespace App\Controller;

use App\Repository\RealisationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RealisationFrontController extends AbstractController
{
    #[Route('/realisations', name: 'app_realisation_front')]
    public function index(RealisationRepository $realisationRepository): Response
    {
        $realisation = $realisationRepository->findAllOrderedByDate();
        return $this->render('realisation_front/index.html.twig', [
            'controller_name' => 'Les Réalisations',
            'realisations' => $realisation
        ]);
    }
}
