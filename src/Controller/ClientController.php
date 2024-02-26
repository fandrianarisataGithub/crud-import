<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClientController extends AbstractController
{
    #[Route('/client', name: 'app_client')]
    public function index(Request $request): Response
    {
        dd($request);
        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
}
