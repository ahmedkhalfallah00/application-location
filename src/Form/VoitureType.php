<?php

namespace App\Form;

use App\Entity\Voiture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class VoitureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('type',TextType::class,[
            'attr' =>[
            'class' =>'form-control',
            'required'=>'required'
            ]
        ])
        ->add('prix',TextType::class,[
            'attr' =>[
            'class' =>'form-control',
            'required'=>'required'
            ]
        ])
        ->add('couleur',TextType::class,[
            'attr' =>[
            'class' =>'form-control',
            'required'=>'required'
            ]
        ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Voiture::class,
        ]);
    }
}
