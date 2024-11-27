<?php

declare(strict_types=1);

namespace App\Controller\Movie;

use App\Repository\PlaylistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListController extends AbstractController
{
    #[Route('/lists', name: 'page_lists')]
    public function index(PlaylistRepository $playlistRepository): Response
    {
        $playlists = $playlistRepository->findAll();
        return $this->render('movie/lists.html.twig', ['playlists' => $playlists]);
    }
}
