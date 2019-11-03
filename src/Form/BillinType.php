<?php

namespace App\Form;

use App\Entity\Billin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\Type\DateTimePickerType;

class BillinType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rNr')
            ->add('hinweis')
            ->add('billArticleDescription')
            ->add('billPrice')
            ->add('billDate', DateTimePickerType::class)
            ->add('billProvidedDateMm', DateTimePickerType::class)
            ->add('customerFirstname')
            ->add('customerLastname')
            ->add('customerEmail')
            ->add('customerAddress')
            ->add('customerCountry')
            ->add('customerCity')
            ->add('customerCompany')
            ->add('customerPhone')
            ->add('customerZip')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            //'data_class' => Billin::class,
        ]);
    }
}
