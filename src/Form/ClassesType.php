<?php

namespace App\Form;

use App\Entity\Classes;
use App\Entity\Professeurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClassesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomClasse')
            ->add('Professeur', EntityType::class, [
                
                'class' => Professeurs::class,
            
        // afficher plusieurs choices_label : le nom et le prenom du professeur, sinon, il affiche juste le nom.
                'choice_label' => function (Professeurs $prof) {
                    return $prof->getPrenomProfesseur() . ' ' . $prof->getNomProfesseur();
        
                }, 
                'label' => "Choisir un professeur"
        
    ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Classes::class,
        ]);
    }
}
