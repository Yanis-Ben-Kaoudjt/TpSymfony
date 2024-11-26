<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Subscription;
use App\Entity\User;
use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route(path: '/', name: 'page_hello')]
    public function accueil(MovieRepository $movieRepository): Response
    {
        $movies = $movieRepository->findAll();
        return $this->render('index.html.twig', ['movies' => $movies]);
    }
}
