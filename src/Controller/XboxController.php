<?php

namespace App\Controller;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class XboxController extends AbstractController
{
    #[Route('/xbox', name: 'app_xbox')]
    public function index(ProductRepository $repo): Response
    {
        $findType = $repo->findAllWithType(3);
        return $this->render('xbox/index.html.twig', [
            'articlesType' => $findType
        ]);
    }
}
