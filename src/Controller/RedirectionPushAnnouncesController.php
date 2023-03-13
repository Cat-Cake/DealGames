<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RedirectionPushAnnouncesController extends AbstractController
{
    #[Route('/redirection/push/announces', name: 'app_redirection_push_announces')]
    public function index(): Response
    {
        return $this->render('redirection_push_announces/index.html.twig', [
            'controller_name' => 'RedirectionPushAnnouncesController',
        ]);
    }
}
