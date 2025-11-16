<?php

namespace App\Controller;

use App\Repository\TestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(TestRepository $testRepository): Response
    {
        return $this->render('home/home.html.twig', [
            'tests' => $testRepository->findAll(),
        ]);
    }
}
