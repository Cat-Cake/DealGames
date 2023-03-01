<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Ps5Controller extends AbstractController
{
    #[Route('/ps5', name: 'app_ps5')]
    public function index(): Response
    {
        return $this->render('ps5/index.html.twig', [
            'controller_name' => 'Ps5Controller',
        ]);
    }
}
