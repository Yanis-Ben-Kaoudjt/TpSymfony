<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController
{
    #[Route(path: '/hello', name: 'page_hello')]
    public function accueil(){
        return new Response();
    }
}