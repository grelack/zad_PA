<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route('/user/{id}', name: 'user_show')]
    public function checkUser(EntityManagerInterface $entityManager, string $login, ?string $password): Response
    {
        $user_login = $entityManager->getRepository(User::class)->find($login);

        if (!$user_login) {
            throw $this->createNotFoundException(
                'No user with login:  '.$user_login
            );
        }

        // $user_pass = $entityManager->getRepository(User::class)->find($password);

        // if (!$user_pass) {
        //     throw $this->createNotFoundException(
        //         'Password not valid:'
        //     );
        // }

        return new Response('Wellcome: '.$user_login->getName() . '. You ahave been logged in.');

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }

    #[Route('/user', name: 'add_user')]
    public function createProduct(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $user = new User();
        $user->setLogin('mati');
        $user->setPassword("zaq123");
        $user->setPermission(9);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($user);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new user with id '.$user->getId());
    }
}
