<?php

namespace App\Controller;

use App\Repository\ImageGaleryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FrontImageController extends AbstractController
{
    #[Route('/galerie', name: 'app_front_image')]
    public function index(ImageGaleryRepository $imageGaleryRepository): Response
    {
        return $this->render('front_image/index.html.twig', [
            'controller_name' => 'FrontImageController',
            'images' => $imageGaleryRepository->findAll()
        ]);
    }
}
