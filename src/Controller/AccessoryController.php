<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccessoryController extends AbstractController
{
    #[Route('/accessory', name: 'app_accessory')]
    public function index(): Response
    {
        return $this->render('accessory/index.html.twig', [
            'controller_name' => 'AccessoryController',
        ]);
    }
}
