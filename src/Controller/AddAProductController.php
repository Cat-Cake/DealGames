<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddAProductController extends AbstractController
{
    #[Route('/addproduct', name: 'app_add_a_product')]
    public function index(): Response
    {
        $products = new Product();
        $form = $this->createForm(ProductType::class, $products);
        return $this->render('add_a_product/index.html.twig', [
            'form' => $form,
        ]);
    }
}
