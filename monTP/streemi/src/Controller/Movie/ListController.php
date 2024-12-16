<?php

declare(strict_types=1);

namespace App\Controller\Movie;

use App\Repository\PlaylistRepository;
use App\Repository\PlaylistSubscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListController extends AbstractController
{
    #[Route('/lists', name: 'page_lists')]
    public function index(PlaylistRepository $playlistRepository, PlaylistSubscriptionRepository $playlistSubscriptionRepository): Response
    {
        $playlists = $playlistRepository->findAll();
        $playlistSubscriptions = $playlistSubscriptionRepository->findAll();
        return $this->render('movie/lists.html.twig', ['playlists' => $playlists, 'playlistSubscriptions' => $playlistSubscriptions]);
    }
}
