<?php

namespace App\Controller;

use App\Entity\User;
use App\Controller\UserController;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(UserRepository $userRepository): Response
    {  

        if( isset($_POST["login"]) && isset($_POST["password"])){
            if( ( !empty( $_POST["login"] )) && !empty( $_POST["password"] )){

                $user_login = $_POST["login"];
                $user_pass = $_POST["password"];

                $user = $userRepository->findOneBy([
                    "login" => $user_login
                ]);
                
                $password = $userRepository->findOneBy([
                    "password" => $user_pass
                ]);

                if (!$user || !$password) {
                    unset($_POST["login"]);
                    unset($_POST["password"]);
                    return $this->render('Home/home.html.twig', [
                        "param_auth_error" => 1,
                        "param_message" => "Logowanie niepoprawne. Spróbuj jeszcze raz."
                    ]);
                }else{
                    unset($_POST["login"]);
                    unset($_POST["password"]);
                    return $this->render('login/index.html.twig', [
                        'controller_name' => 'LoginController',
                        "param_auth_error" => 1,
                        'param_message' => "Udało się zalogować!",
                    ]);

                }
            }else{
                unset($_POST["login"]);
                unset($_POST["password"]);
                return $this->render('Home/home.html.twig', [
                        'controller_name' => 'LoginController',
                        "param_auth_error" => 1,
                        'param_message' => "Logowanie niepoprawne. Spróbuj jeszcze raz.",
                    ]);
                }
                unset($_POST["login"]);
                unset($_POST["password"]);
        }else{
                            unset($_POST["login"]);
                unset($_POST["password"]);
            return $this->render('Home/home.html.twig', [
                "param_auth_error" => 0,
                "param_message" => null
                
            ]);

        }








        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
            // 'params' => $array,
        ]);
    }
}
