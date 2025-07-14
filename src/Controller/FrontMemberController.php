<?php

namespace App\Controller;

use App\Repository\MemberRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FrontMemberController extends AbstractController
{
    #[Route('/front/member', name: 'app_front_member')]
    public function index(MemberRepository $memberRepository): Response
    {
        return $this->render('front_member/index.html.twig', [
            'controller_name' => 'FrontMemberController',
            'members' => $memberRepository->findAll()
        ]);
    }
}
