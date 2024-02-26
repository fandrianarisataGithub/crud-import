<?php

namespace App\Controller;

use App\Entity\Clients;
use App\Form\ClientType;
use App\Repository\ClientsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClientController extends AbstractController
{
    public function __construct(
        private ClientsRepository $repoClient,
        private EntityManagerInterface $em
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
    #[Route('/edit/client/{id}', name: 'app_edit_client')]
    public function edit(Request $request, Clients $client): Response
    {
        $formClient = $this->createForm(ClientType::class, $client);
        $formClient->handleRequest($request);

        if(!$client) {
            throw $this->createNotFoundException(
                'No Client found for id '.$client->getId()
            );
        }
        
        else {
            
            if ($formClient->isSubmitted()) {
    
                $formData = $formClient->getData();
                $client->setCompteAffaire($formData->getCompteAffaire());
                $client->setCompteEvenement($formData->getCompteEvenement());
                $client->setCompteDernierEvenement($formData->getCompteDernierEvenement());
                $client->setNumeroFiche($formData->getNumeroFiche());
                $client->setLibelleCivilite($formData->getLibelleCivilite());
                $client->setPropActuelVehicule($formData->getPropActuelVehicule());
                $client->setNom($formData->getNom());
                $client->setPrenom($formData->getPrenom());
                $client->setNumNomVoie($formData->getNumNomVoie());
                $client->setComplementAdress($formData->getComplementAdress());
                $client->setCodePostal($formData->getCodePostal());
                $client->setVille($formData->getVille());
                $client->setTelDomicile($formData->getTelDomicile());
                $client->setTelPortable($formData->getTelPortable());
                $client->setTelJob($formData->getTelJob());
                $client->setEmail($formData->getEmail());
                $client->setDateMiseEnCirc($formData->getDateMiseEnCirc());
                $client->setDateAchat($formData->getDateAchat());
                $client->setDateDerniereEvenement($formData->getDateDerniereEvenement());
                $client->setLibelleMarque($formData->getLibelleMarque());
                $client->setLibelleModele($formData->getLibelleModele());
                $client->setVersion($formData->getVersion());
                $client->setVin($formData->getVin());
                $client->setImmatriculation($formData->getImmatriculation());
                $client->setTypeProspect($formData->getTypeProspect());
                $client->setKilometrage($formData->getKilometrage());
                $client->setLibelleEnergie($formData->getLibelleEnergie());
                $client->setVendeurVn($formData->getVendeurVn());
                $client->setVendeurVo($formData->getVendeurVo());
                $client->setCommentaireFacturation($formData->getCommentaireFacturation());
                $client->setTypeVnVo($formData->getTypeVnVo());
                $client->setNumeroDossier($formData->getNumeroDossier());
                $client->setIntermediaireVente($formData->getIntermediaireVente());
                $client->setDateEvenement($formData->getDateEvenement());
                $client->setOrigineEvenement($formData->getOrigineEvenement());
                
                $this->em->getConnection()->beginTransaction();
    
                try {
    
                    $this->em->flush();
                    $this->em->commit();
                    $this->addFlash('success', 'Client modifié avec succès.');
    
                    return $this->redirectToRoute('app_index');
    
                } catch (\Throwable $th) {
    
                    $this->em->rollback();
                    new Response("Problème lors de la modification." . $th);
    
                }
    
            }
        }
        
        return $this->render('client/edit-client.html.twig', [
            'formClient' => $formClient->createView()
        ]);
    }
}
