<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsListController extends AbstractController
{
    #[Route('/products/list', name: 'app_products_list')]
    public function index(ProductRepository $pro): Response
    {
        $liste = $pro->findAll();
        return $this->render('products_list/index.html.twig', [
            'products' => $liste,
        ]);
    }
}
