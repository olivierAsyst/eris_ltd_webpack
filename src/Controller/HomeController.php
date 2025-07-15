<?php

namespace App\Controller;

use App\Repository\HomeVideoRepository;
use App\Repository\ImageGaleryRepository;
use App\Repository\MemberRepository;
use App\Repository\OurnumberRepository;
use App\Repository\PartnerRepository;
use App\Repository\RealisationRepository;
use App\Repository\SocialMediaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        MemberRepository $memberRepository, 
        ImageGaleryRepository $imageGaleryRepository,
        PartnerRepository $partnerRepository,
        SocialMediaRepository $socialMediaRepository,
        HomeVideoRepository $homeVideoRepository,
        RealisationRepository $realisationRepository,
        OurnumberRepository $ournumberRepository
         ): Response
    {

        $social = $socialMediaRepository->findAll();
        $video = $homeVideoRepository->findLatest();
        $partner = $partnerRepository->findAll();
        $members = $memberRepository->findAll();
        $images = $imageGaleryRepository->findAll();
        $realisations = $realisationRepository->findLastThreeRealisations();
        $chiffres = $ournumberRepository->findLatestNumber();

        return $this->render('home/index.html.twig', [
            'members' => $members,
            'images' => $images,
            'partners' => $partner,
            'socials' => $social,
            'video' => $video,
            'realisations' => $realisations,
            'chiffre' => $chiffres,
            'controller_name' => 'Acceuil | ERIS'

        ]);
    }
}
