<?php

namespace App\Form;

use App\Entity\Eleves;
use App\Entity\Classes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class ElevesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomEleve')
            ->add('prenomEleve')
            ->add('dateNaissance', BirthdayType::class)
            ->add('classe', EntityType::class, [
                
                'class' => Classes::class,
        
                'choice_label' => 'nomClasse', 
                'label' => "Choisir une classe"
        
    ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Eleves::class,
        ]);
    }
}
