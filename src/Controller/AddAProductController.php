<?php

namespace App\Controller;

use App\Entity\Announce;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\AnnounceRepository;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Config\Framework\RequestConfig;

class AddAProductController extends AbstractController
{
    private $security;

    #[Route('/addproduct', name: 'app_add_a_product')]
    public function index(Request $request, ProductRepository $productRepository): Response
    {
        $products = new Product();
        $form = $this->createForm(ProductType::class, $products);
        $form-> handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $products->setUser($this->getUser());
            $productRepository->save($products, true);
            return $this->redirectToRoute('app_redirection_push_announces');
        }

        return $this->render('add_a_product/index.html.twig', [
            'form' => $form,
        ]);
    }
}
