<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyadsController extends AbstractController
{
    #[Route('/myads', name: 'app_myads')]
    public function index(): Response
    {
        return $this->render('myads/index.html.twig', [
            'controller_name' => 'MyadsController',
        ]);
    }
}
