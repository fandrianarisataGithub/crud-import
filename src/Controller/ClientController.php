<?php

namespace App\Controller;

use App\Repository\ClientsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClientController extends AbstractController
{
    public function __construct(
        private ClientsRepository $repoClient 
    )
    {
        
    }
    #[Route('/load/client', name: 'app_load_client')]
    public function load(Request $request): Response
    {
        $response = new Response();
        $data = json_encode($this->repoClient->listClient());
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->setContent($data);
        return $response;
    }
}
