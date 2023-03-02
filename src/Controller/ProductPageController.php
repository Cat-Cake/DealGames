<?php

namespace App\Controller;

use App\Entity\Announce;
use App\Entity\Product;
use App\Form\AnnounceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductPageController extends AbstractController
{
    #[Route('/products/{id}', name: 'app_product_page.detail')]
    public function index(Product $product): Response
    {
        return $this->render('product_page/index.html.twig', [
            'product' => $product,
        ]);
    }
}
