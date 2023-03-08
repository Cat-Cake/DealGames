<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountPageController extends AbstractController
{
    #[Route('/account/page/{id}', name: 'app_account_page')]

    public function showUserAction(User $user): Response
    {

        if (!$user) {
            throw $this->createNotFoundException(
                'Aucun utilisateur trouvé pour l\'ID '.$user
            );
        }

        return $this->render('account_page/index.html.twig', [
            'user' => $user,
        ]);
    }

//    public function showUserAction(Request $request, string $id): Response
//    {
//        $doctrine = $this->get(ContainerInterface::class)->get('doctrine');
//        $user = $doctrine->getRepository(User::class)->find($id);
//
//        if (!$user) {
//            throw $this->createNotFoundException(
//                'Aucun utilisateur trouvé pour l\'ID '.$user
//            );
//        }
//
//        return $this->render('account_page/index.html.twig', [
//            'user' => $user,
//        ]);
//    }


//    public function index(Request $request): Response
//    {
//        $userId = $request->query->get('id');
//        return $this->render('account_page/index.html.twig', [
//            'user' => $user,
//        ]);
//    }

}
