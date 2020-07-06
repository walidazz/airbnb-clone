<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PasswordUpdateType extends AbstractType
{

    /**
     * Permet de configurer un input
     *
     * @param [string] $label
     * @param [string] $placeholder
     * @return array
     */
    private function getConfiguration($label, $placeholder)
    {
        return ['label' => $label, 'attr' => ['placeholder' => $placeholder]];
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('oldPassword', PasswordType::class, $this->getConfiguration('Ancien mot de passe', 'Rentrez votre ancien mot de passe'))
            ->add('newPassword', PasswordType::class, $this->getConfiguration('nouveau mot de passe', 'Rentrez votre nouveau mot de passe'))
            ->add('confirmPassword', PasswordType::class, $this->getConfiguration('nouveau mot de passe', 'Rentrez votre nouveau mot de passe'))
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success btn-md align-items-center'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
