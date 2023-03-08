<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Ps5Controller extends AbstractController
{
    #[Route('/ps5', name: 'PS5')]
    public function index(ProductRepository $repo): Response
    {

        return $this->render('ps5/index.html.twig', [
        ]);
    }
}
