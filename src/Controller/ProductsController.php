<?php

namespace App\Controller;

use App\Entity\Type;
use App\Repository\ProductRepository;
use App\Repository\TypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    #[Route('/products', name: 'app_products')]
    public function index(ProductRepository $repo, TypeRepository $type): Response
    {
        $liste = $repo->findAll();
        $listeType = $type->findAll();
//        $getTime = $repo->getCreatedAtFormatted();

        return $this->render('products/index.html.twig', [
              'articles' => $liste,
              'types' => $listeType,
//            'times' => $getTime,
        ]);
    }
}
