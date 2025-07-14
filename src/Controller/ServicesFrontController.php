<?php

namespace App\Controller;

use App\Repository\ServicesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ServicesFrontController extends AbstractController{
    #[Route('/services', name: 'app_services_front')]
    public function index(ServicesRepository $servicesRepository): Response
    {
        return $this->render('services_front/index.html.twig', [
            'controller_name' => 'ServicesFrontController',
            'services' => $servicesRepository->findAll()
        ]);
    }
}
