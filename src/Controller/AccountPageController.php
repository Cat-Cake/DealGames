<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountPageController extends AbstractController
{
    #[Route('/account/page', name: 'app_account_page')]
    public function index(): Response
    {
        return $this->render('account_page/index.html.twig', [
            'controller_name' => 'AccountPageController',
        ]);
    }
}
