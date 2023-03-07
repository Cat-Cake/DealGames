<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(): Response
    {
        $current_user = $this->getUser();
        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
            'currentuUsers' => $current_user
        ]);
    }
}
