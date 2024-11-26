<?php

declare(strict_types=1);

namespace App\Controller\Other;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class CategoryController extends AbstractController
{
    #[Route(path: '/categories', name: 'page_categories')]
    public function categories( CategorieRepository $categoryRepository): \Symfony\Component\HttpFoundation\Response
    {
        $categories = $categoryRepository->findAll();
        return $this->render('other/category.html.twig', ['categories' => $categories]);
    }
}
