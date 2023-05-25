<?php
// Controller créé par make:home
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {   
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/apropos', name: 'app_apropos')]
    public function apropos(Request $request): Response
    {   
        return $this->render('home/about.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/menu', name: 'app_carte')]
    public function menu(Request $request): Response
    {   
        return $this->render('menu/carte.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
