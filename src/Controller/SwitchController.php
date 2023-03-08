<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SwitchController extends AbstractController
{
    #[Route('/switch', name: 'app_switch')]
    public function index(ProductRepository $repo): Response
    {
        $findType = $repo->findAllWithType(5);
        return $this->render('switch/index.html.twig', [
            'articlesType' => $findType
        ]);
    }
}
