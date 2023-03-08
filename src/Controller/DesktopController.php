<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DesktopController extends AbstractController
{
    #[Route('/desktop', name: 'app_desktop')]
    public function index(ProductRepository $repo): Response
    {
        $findType = $repo->findAllWithType(4);
        return $this->render('desktop/index.html.twig', [
            'articlesType' => $findType
        ]);
    }
}
