<?php

namespace App\Controller;

use App\Entity\Announce;
use App\Form\AnnounceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductPageController extends AbstractController
{
    #[Route('/product/page', name: 'app_product_page')]
    public function index(): Response
    {
//        $announce = new Announce();
//        $form = $this->createForm(AnnounceType::class, $announce);
        return $this->render('product_page/index.html.twig', [
            'controller_name' => 'ProductPageController',
            'form' => $form
        ]);
    }
}
