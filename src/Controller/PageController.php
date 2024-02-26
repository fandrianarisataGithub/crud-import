<?php

namespace App\Controller;

use App\Entity\Clients;
use App\Form\ClientType;
use App\Repository\ClientsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class PageController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $em,
        private ClientsRepository $repoClient
    )
    {
        
    }

    #[Route('/page', name: 'app_page')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PageController.php',
        ]);
    }
    #[Route('/', name: 'app_index')]
    public function indexPage(Request $request): Response
    {
        $form = $this->createForm(ClientType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $fichier = $form->get('file')->getData();
            $fileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($fichier->getRealPath()); 
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($fileType); 
            $spreadsheet = $reader->load($fichier->getRealPath());
            $data = $spreadsheet->getActiveSheet()->toArray();
            
            for ($i = 1; $i < count($data); $i++) {

                // Unicité de donnée par rapport au numero de fichier et numero de doossier avant l'import 
                $isClientExist = $this->repoClient->findOneBy([
                        'numeroFiche' => intval(trim($data[$i][3])),
                        'numeroDossier' => trim($data[$i][31])
                    ]
                );

                // si cette ligne n'existe pas dans la base de donnée, on l'insère
                if(!$isClientExist) {
                    $client = new Clients();
                    $client->setCompteAffaire(trim($data[$i][0]));
                    $client->setCompteEvenement(trim($data[$i][1]));
                    $client->setCompteDernierEvenement(trim($data[$i][2]));
                    $client->setNumeroFiche(intval(trim($data[$i][3])));
                    $client->setLibelleCivilite(trim($data[$i][4]));
                    $client->setPropActuelVehicule(trim($data[$i][5]));
                    $client->setNom(trim($data[$i][6]));
                    $client->setPrenom(trim($data[$i][7]));
                    $client->setNumNomVoie(trim($data[$i][8]));
                    $client->setComplementAdress(trim($data[$i][9]));
                    $client->setCodePostal(intval(trim($data[$i][10])));
                    $client->setVille(trim($data[$i][11]));
                    $client->setTelDomicile(trim($data[$i][12]));
                    $client->setTelPortable(trim($data[$i][13]));
                    $client->setTelJob(trim($data[$i][14]));
                    $client->setEmail(trim($data[$i][15]));

                    if ($data[$i][16]) {
                        $client->setDateMiseEnCirc(
                            \DateTime::createFromFormat('n/d/Y', trim($data[$i][16])) ? 
                            \DateTime::createFromFormat('n/d/Y', trim($data[$i][16])) : 
                            \DateTime::createFromFormat('d/n/Y', trim($data[$i][16]))
                        );
                        if(
                            \DateTime::createFromFormat('d/n/Y', trim($data[$i][16])) === false && 
                            \DateTime::createFromFormat('n/d/Y', trim($data[$i][16])) === false
                        ){
                            return new Response("Il y a une format de date (date de mise en circulation) invalide sur la ligne n° " . $i + 1);
                        }
                    }
                    
                    if ($data[$i][17]) {
                        $client->setDateAchat(
                            \DateTime::createFromFormat('n/d/Y', trim($data[$i][17])) ? 
                            \DateTime::createFromFormat('n/d/Y', trim($data[$i][17])) : 
                            \DateTime::createFromFormat('d/n/Y', trim($data[$i][17]))
                        );
                        if(
                            \DateTime::createFromFormat('d/n/Y', trim($data[$i][17])) === false && 
                            \DateTime::createFromFormat('n/d/Y', trim($data[$i][17])) === false
                        ){
                            return new Response("Il y a une format de date (date achat) invalide sur la ligne n° " . $i + 1);
                        }
                    }

                    if ($data[$i][18]) {
                        $client->setDateDerniereEvenement(
                            \DateTime::createFromFormat('n/d/Y', trim($data[$i][18])) ? 
                            \DateTime::createFromFormat('n/d/Y', trim($data[$i][18])) : 
                            \DateTime::createFromFormat('d/n/Y', trim($data[$i][18]))
                        );
                        if (
                            \DateTime::createFromFormat('d/n/Y', trim($data[$i][18])) === false && 
                            \DateTime::createFromFormat('n/d/Y', trim($data[$i][18])) === false
                        ){
                            return new Response("Il y a une format de date (date dernier evt) invalide sur la ligne n° " . $i + 1);
                        }
                    }

                    $client->setLibelleMarque(trim($data[$i][19]));
                    $client->setLibelleModele(trim($data[$i][20]));
                    $client->setVersion(trim($data[$i][21]));
                    $client->setVin(trim($data[$i][22]));
                    $client->setImmatriculation(trim($data[$i][23]));
                    $client->setTypeProspect(trim($data[$i][24]));
                    $client->setKilometrage(intval(trim($data[$i][25])));
                    $client->setLibelleEnergie(trim($data[$i][26]));
                    $client->setVendeurVn(trim($data[$i][27]));
                    $client->setVendeurVo(trim($data[$i][28]));
                    $client->setCommentaireFacturation(trim($data[$i][29]));
                    $client->setTypeVnVo(trim($data[$i][30]));
                    $client->setNumeroDossier(trim($data[$i][31]));
                    $client->setIntermediaireVente(trim($data[$i][32]));

                    if ($data[$i][33]) {
                        $client->setDateEvenement(
                            \DateTime::createFromFormat('n/d/Y', trim($data[$i][33])) ? 
                            \DateTime::createFromFormat('n/d/Y', trim($data[$i][33])) : 
                            \DateTime::createFromFormat('d/n/Y', trim($data[$i][33]))
                        );
                        if(
                            \DateTime::createFromFormat('d/n/Y', trim($data[$i][33])) === false && 
                            \DateTime::createFromFormat('n/d/Y', trim($data[$i][33])) === false
                        ){
                            return new Response("Il y a une format de date (date evt) invalide sur la ligne n° " . $i + 1);
                        }
                    }

                    $client->setOrigineEvenement(trim($data[$i][34]));   
                    $this->em->getConnection()->beginTransaction();

                    try {
                        $this->em->persist($client);
                        $this->em->flush();
                        $this->em->commit();
                    } catch (\Throwable $th) {
                        $this->em->rollback();
                        new Response("Problème lors de l'importation." . $th);
                    }
                }
            } 
        }
        return $this->render('home.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
