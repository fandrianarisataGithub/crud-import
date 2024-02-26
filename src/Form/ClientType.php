<?php

namespace App\Form;

use App\Entity\Clients;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('compteAffaire', TextType::class, [
                'required' => $this->isRequired('compteAffaire'),
            ])
            ->add('compteEvenement', TextType::class, [
                'required' => $this->isRequired('compteEvenement'),
            ])
            ->add('compteDernierEvenement', TextType::class, [
                'required' => $this->isRequired('compteDernierEvenement'),
            ])
            ->add('numeroFiche', TextType::class, [
                'required' => $this->isRequired('numeroFiche'),
            ])
            ->add('libelleCivilite', TextType::class, [
                'required' => $this->isRequired('libelleCivilite'),
            ])
            ->add('propActuelVehicule', TextType::class, [
                'required' => $this->isRequired('propActuelVehicule'),
            ])
            ->add('nom', TextType::class, [
                'required' => $this->isRequired('nom'),
            ])
            ->add('prenom', TextType::class, [
                'required' => $this->isRequired('prenom'),
            ])
            ->add('numNomVoie', TextType::class, [
                'required' => $this->isRequired('numNomVoie'),
            ])
            ->add('complementAdress', TextType::class, [
                'required' => $this->isRequired('complementAdress'),
            ])
            ->add('codePostal', TextType::class, [
                'required' => $this->isRequired('codePostal'),
            ])
            ->add('ville', TextType::class, [
                'required' => $this->isRequired('ville'),
            ])
            ->add('telDomicile', TextType::class, [
                'required' => $this->isRequired('telDomicile'),
            ])
            ->add('telPortable', TextType::class, [
                'required' => $this->isRequired('telPortable'),
            ])
            ->add('telJob', TextType::class, [
                'required' => $this->isRequired('telJob'),
            ])
            ->add('email', TextType::class, [
                'required' => $this->isRequired('email'),
            ])
            ->add('dateMiseEnCirc', DateType::class, [
                'required' => $this->isRequired('dateMiseEnCirc'),
            ])
            ->add('dateAchat', DateType::class, [
                'required' => $this->isRequired('dateAchat'),
            ])
            ->add('dateDerniereEvenement', DateType::class, [
                'required' => $this->isRequired('dateDerniereEvenement'),
            ])
            ->add('libelleMarque', TextType::class, [
                'required' => $this->isRequired('libelleMarque'),
            ])
            ->add('libelleModele', TextType::class, [
                'required' => $this->isRequired('libelleModele'),
            ])
            ->add('version', TextType::class, [
                'required' => $this->isRequired('version'),
            ])
            ->add('vin', TextType::class, [
                'required' => $this->isRequired('vin'),
            ])
            ->add('immatriculation', TextType::class, [
                'required' => $this->isRequired('immatriculation'),
            ])
            ->add('typeProspect', TextType::class, [
                'required' => $this->isRequired('typeProspect'),
            ])
            ->add('kilometrage', TextType::class, [
                'required' => $this->isRequired('kilometrage'),
            ])
            ->add('libelleEnergie', TextType::class, [
                'required' => $this->isRequired('libelleEnergie'),
            ])
            ->add('vendeurVn', TextType::class, [
                'required' => $this->isRequired('vendeurVn'),
            ])
            ->add('vendeurVo', TextType::class, [
                'required' => $this->isRequired('vendeurVo'),
            ])
            ->add('commentaireFacturation', TextType::class, [
                'required' => $this->isRequired('commentaireFacturation'),
            ])
            ->add('typeVnVo', TextType::class, [
                'required' => $this->isRequired('typeVnVo'),
            ])
            ->add('numeroDossier', TextType::class, [
                'required' => $this->isRequired('numeroDossier'),
            ])
            ->add('intermediaireVente', TextType::class, [
                'required' => $this->isRequired('intermediaireVente'),
            ])
            ->add('dateEvenement', DateType::class, [
                'required' => $this->isRequired('dateEvenement'),
            ])
            ->add('origineEvenement', TextType::class, [
                'required' => $this->isRequired('origineEvenement'),
            ])
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Clients::class,
        ]);
    }
    private function isRequired(string $fieldName): bool
    {
        return (new Clients())->isRequiredField($fieldName);
    }
}
