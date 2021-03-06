<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom',TextType::class,[
            'attr' =>[
            'class' =>'form-control',
            'required'=>'required'
            ]
        ])
        ->add('prenom',TextType::class,[
            'attr' =>[
            'class' =>'form-control',
            'required'=>'required'
            ]
        ])
        ->add('addresse',TextType::class,[
            'attr' =>[
            'class' =>'form-control',
            'required'=>'required'
            ]
        ])
        ->add('tel',TextType::class,[
            'attr' =>[
            'class' =>'form-control',
            'required'=>'required'
            ]
        ])
        ->add('contrat')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
