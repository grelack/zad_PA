<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/", name="home")
 */
class HomePageControler extends AbstractController
{
 
    
    #[Route('/', name: 'home')]
    public function index(){
        return $this->render('Home/home.twig');
    }
}
