<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class HomePageControler extends AbstractController
{
 
    #[Route('/', name: 'home')]
    #[Route('/home', name: 'home')]
    public function index(){
        return $this->render('Home/home.html.twig', [
            "param_auth_error" => 0,
            "param_message" => null
            
        ]);
    }
}
