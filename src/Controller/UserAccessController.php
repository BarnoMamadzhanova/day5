<?php

namespace App\Controller;

use App\Repository\TestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserAccessController extends AbstractController
{
    #[Route('/', name: 'app_user', methods: ['GET'])]
    public function index(TestRepository $testRepository): Response
    {
        return $this->render('user_access/index.html.twig', [
            'tests' => $testRepository->findAll(),
        ]);
    }
}
