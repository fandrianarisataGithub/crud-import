<?php

namespace App\Repository;

use App\Entity\Clients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Clients>
 *
 * @method Clients|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clients|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clients[]    findAll()
 * @method Clients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clients::class);
    }

    //    /**
    //     * @return Clients[] Returns an array of Clients objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Clients
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function listClient(){

        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT 
                c.id as client_id,
                c.compte_affaire, 
                c.compte_evenement,
                c.compte_dernier_evenement,
                c.numero_fiche,
                c.libelle_civilite,
                c.prop_actuel_vehicule,
                c.nom,
                c.prenom,
                c.num_nom_voie,
                c.complement_adress,
                c.code_postal,
                c.ville,
                c.tel_domicile,
                c.tel_portable,
                c.tel_job,
                c.email,
                DATE_FORMAT(c.date_mise_en_circ,"%d/%m/%Y") as date_mise_en_circ,
                DATE_FORMAT(c.date_achat,"%d/%m/%Y") as date_achat,
                DATE_FORMAT(c.date_derniere_evenement,"%d/%m/%Y") as date_derniere_evenement,
                c.libelle_marque,
                c.libelle_modele,
                c.version,
                c.vin,
                c.immatriculation,
                c.type_prospect,
                c.kilometrage,
                c.libelle_energie,
                c.vendeur_vn,
                c.vendeur_vo,
                c.commentaire_facturation,
                c.type_vn_vo,
                c.numero_dossier,
                c.intermediaire_vente,
                DATE_FORMAT(c.date_evenement,"%d/%m/%Y") as date_evenement,
                c.origine_evenement
            FROM clients c
            ';
        $stmt = $conn->prepare($sql);
        // returns an array of arrays (i.e. a raw data set)
        $result = $stmt->executeQuery();
        return $result->fetchAllAssociative();

    }
}
