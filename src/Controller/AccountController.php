<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(ProductRepository $repo): Response
    {
        $current_user = $this->getUser();
        $nbrProdts = $repo->countUserPosts($this->getUser());

        return $this->render('account/index.html.twig', [
            'number_post' => $nbrProdts,
            'currentuUsers' => $current_user
        ]);
    }
}
