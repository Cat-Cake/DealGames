<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ProductRepository $repo): Response
    {
        $liste = $repo->findAll();
        $findLatestFourProducts = $repo->findLatestFourProducts();

        return $this->render('home/index.html.twig', [
            'articles' => $findLatestFourProducts,
        ]);
    }
}
