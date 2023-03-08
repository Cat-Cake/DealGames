<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Ps4Controller extends AbstractController
{
    #[Route('/ps4', name: 'app_ps4')]
    public function index(): Response
    {
        return $this->render('ps4/index.html.twig', [
            'controller_name' => 'Ps4Controller',
        ]);
    }
}
