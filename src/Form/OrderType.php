<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('company_name', TextType::class, [
                'label' => 'Bedrijfsnaam',
                "required" => true,
            ])
            ->add('recipidient', TextType::class, [
                'label' => 'Ontvanger',
                "required" => true,
            ])
            ->add('country', TextType::class, [
                'label' => 'Land',
                "required" => true,
            ])
            ->add('postcode', TextType::class, [
                'label' => 'Postcode',
                "required" => true,
                'attr' => [
                    'class' => 'w-25 postcode',
                ]
            ])
            ->add('huisnummer', TextType::class, [
                'label' => 'Huisnummer',
                "required" => true,
                'attr' => [
                    'class' => 'w-25 huisnummer',
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Stad',
                "required" => true,
                'attr' => [
                    'class' => 'city',
                ]
            ])
            ->add('straatnaam', TextType::class, [
                'label' => 'Straatnaam',
                "required" => true,
                'attr' => [
                    'class' => 'straatnaam',
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                "required" => true,
            ])
            ->add('phoneNr', TelType::class, [
                'label' => 'Telefoonnummer',
                'required' => true,
            ])
            ->add('date', DateType::class, [
                'label' => 'Bezorgdatum',
                "required" => true,
                'widget' => 'single_text',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\Order',
        ]);
    }
}
