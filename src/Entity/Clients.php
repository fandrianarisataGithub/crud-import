<?php

namespace App\Entity;

use App\Repository\ClientsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientsRepository::class)]
class Clients
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $compteAffaire = null;

    #[ORM\Column(length: 255)]
    private ?string $compteEvenement = null;

    #[ORM\Column(length: 255)]
    private ?string $compteDernierEvenement = null;

    #[ORM\Column]
    private ?int $numeroFiche = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $libelleCivilite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $propActuelVehicule = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numNomVoie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $complementAdress = null;

    #[ORM\Column]
    private ?int $codePostal = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $telDomicile = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $telPortable = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $telJob = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateMiseEnCirc = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateAchat = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDerniereEvenement = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleMarque = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelleModele = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $version = null;

    #[ORM\Column(length: 255)]
    private ?string $vin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $immatriculation = null;

    #[ORM\Column(length: 255)]
    private ?string $typeProspect = null;

    #[ORM\Column(nullable: true)]
    private ?int $kilometrage = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $libelleEnergie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vendeurVn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vendeurVo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commentaireFacturation = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $typeVnVo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numeroDossier = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $intermediaireVente = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateEvenement = null;

    #[ORM\Column(length: 255)]
    private ?string $origineEvenement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompteAffaire(): ?string
    {
        return $this->compteAffaire;
    }

    public function setCompteAffaire(string $compteAffaire): static
    {
        $this->compteAffaire = $compteAffaire;

        return $this;
    }

    public function getCompteEvenement(): ?string
    {
        return $this->compteEvenement;
    }

    public function setCompteEvenement(string $compteEvenement): static
    {
        $this->compteEvenement = $compteEvenement;

        return $this;
    }

    public function getCompteDernierEvenement(): ?string
    {
        return $this->compteDernierEvenement;
    }

    public function setCompteDernierEvenement(string $compteDernierEvenement): static
    {
        $this->compteDernierEvenement = $compteDernierEvenement;

        return $this;
    }

    public function getNumeroFiche(): ?int
    {
        return $this->numeroFiche;
    }

    public function setNumeroFiche(int $numeroFiche): static
    {
        $this->numeroFiche = $numeroFiche;

        return $this;
    }

    public function getLibelleCivilite(): ?string
    {
        return $this->libelleCivilite;
    }

    public function setLibelleCivilite(?string $libelleCivilite): static
    {
        $this->libelleCivilite = $libelleCivilite;

        return $this;
    }

    public function getPropActuelVehicule(): ?string
    {
        return $this->propActuelVehicule;
    }

    public function setPropActuelVehicule(?string $propActuelVehicule): static
    {
        $this->propActuelVehicule = $propActuelVehicule;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumNomVoie(): ?string
    {
        return $this->numNomVoie;
    }

    public function setNumNomVoie(?string $numNomVoie): static
    {
        $this->numNomVoie = $numNomVoie;

        return $this;
    }

    public function getComplementAdress(): ?string
    {
        return $this->complementAdress;
    }

    public function setComplementAdress(?string $complementAdress): static
    {
        $this->complementAdress = $complementAdress;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): static
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelDomicile(): ?string
    {
        return $this->telDomicile;
    }

    public function setTelDomicile(?string $telDomicile): static
    {
        $this->telDomicile = $telDomicile;

        return $this;
    }

    public function getTelPortable(): ?string
    {
        return $this->telPortable;
    }

    public function setTelPortable(?string $telPortable): static
    {
        $this->telPortable = $telPortable;

        return $this;
    }

    public function getTelJob(): ?string
    {
        return $this->telJob;
    }

    public function setTelJob(?string $telJob): static
    {
        $this->telJob = $telJob;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getDateMiseEnCirc(): ?\DateTimeInterface
    {
        return $this->dateMiseEnCirc;
    }

    public function setDateMiseEnCirc(?\DateTimeInterface $dateMiseEnCirc): static
    {
        $this->dateMiseEnCirc = $dateMiseEnCirc;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(?\DateTimeInterface $dateAchat): static
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getDateDerniereEvenement(): ?\DateTimeInterface
    {
        return $this->dateDerniereEvenement;
    }

    public function setDateDerniereEvenement(\DateTimeInterface $dateDerniereEvenement): static
    {
        $this->dateDerniereEvenement = $dateDerniereEvenement;

        return $this;
    }

    public function getLibelleMarque(): ?string
    {
        return $this->libelleMarque;
    }

    public function setLibelleMarque(string $libelleMarque): static
    {
        $this->libelleMarque = $libelleMarque;

        return $this;
    }

    public function getLibelleModele(): ?string
    {
        return $this->libelleModele;
    }

    public function setLibelleModele(?string $libelleModele): static
    {
        $this->libelleModele = $libelleModele;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): static
    {
        $this->version = $version;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(string $vin): static
    {
        $this->vin = $vin;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): static
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getTypeProspect(): ?string
    {
        return $this->typeProspect;
    }

    public function setTypeProspect(string $typeProspect): static
    {
        $this->typeProspect = $typeProspect;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?int $kilometrage): static
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getLibelleEnergie(): ?string
    {
        return $this->libelleEnergie;
    }

    public function setLibelleEnergie(?string $libelleEnergie): static
    {
        $this->libelleEnergie = $libelleEnergie;

        return $this;
    }

    public function getVendeurVn(): ?string
    {
        return $this->vendeurVn;
    }

    public function setVendeurVn(?string $vendeurVn): static
    {
        $this->vendeurVn = $vendeurVn;

        return $this;
    }

    public function getVendeurVo(): ?string
    {
        return $this->vendeurVo;
    }

    public function setVendeurVo(?string $vendeurVo): static
    {
        $this->vendeurVo = $vendeurVo;

        return $this;
    }

    public function getCommentaireFacturation(): ?string
    {
        return $this->commentaireFacturation;
    }

    public function setCommentaireFacturation(?string $commentaireFacturation): static
    {
        $this->commentaireFacturation = $commentaireFacturation;

        return $this;
    }

    public function getTypeVnVo(): ?string
    {
        return $this->typeVnVo;
    }

    public function setTypeVnVo(?string $typeVnVo): static
    {
        $this->typeVnVo = $typeVnVo;

        return $this;
    }

    public function getNumeroDossier(): ?string
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(?string $numeroDossier): static
    {
        $this->numeroDossier = $numeroDossier;

        return $this;
    }

    public function getIntermediaireVente(): ?string
    {
        return $this->intermediaireVente;
    }

    public function setIntermediaireVente(?string $intermediaireVente): static
    {
        $this->intermediaireVente = $intermediaireVente;

        return $this;
    }

    public function getDateEvenement(): ?\DateTimeInterface
    {
        return $this->dateEvenement;
    }

    public function setDateEvenement(\DateTimeInterface $dateEvenement): static
    {
        $this->dateEvenement = $dateEvenement;

        return $this;
    }

    public function getOrigineEvenement(): ?string
    {
        return $this->origineEvenement;
    }

    public function setOrigineEvenement(string $origineEvenement): static
    {
        $this->origineEvenement = $origineEvenement;

        return $this;
    }
}
