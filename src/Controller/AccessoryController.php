<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccessoryController extends AbstractController
{
    #[Route('/accessory', name: 'app_accessory')]
    public function index(ProductRepository $repo): Response
    {
        $findType = $repo->findAllWithType(6);
        return $this->render('accessory/index.html.twig', [
            'articlesType' => $findType
        ]);
    }
}
