<?php

declare(strict_types=1);

namespace App\Controller\Auth;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController
{
    #[Route(path: '/login2', name: 'page_login')]
    public function login(): Response
    {
          return $this->render(view: 'auth/login.html.twig');
    }

    #[Route(path: '/register2', name: 'page_register')]
    public function register(): Response
    {
        return $this->render(view: 'auth/register.html.twig');
    }

    #[Route(path: '/forgot2', name: 'page_forgot')]
    public function forgot(): Response
    {
        return $this->render(view: 'auth/forgot.html.twig');
    }

    #[Route(path: '/reset2', name: 'page_reset')]
    public function reset(): Response
    {
        return $this->render(view: 'auth/reset.html.twig');
    }

    #[Route(path: '/confirm2', name: 'page_confirm')]
    public function confirm(): Response
    {
        return $this->render(view: 'auth/confirm.html.twig');
    }
}
