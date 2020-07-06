<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RegistrationType extends AbstractType
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
            ->add('firstName', TextType::class, $this->getConfiguration('Prénom', 'Entrez votre prénom'))
            ->add('lastName', TextType::class, $this->getConfiguration('Nom', 'Entrez votre nom'))
            ->add('email', EmailType::class, $this->getConfiguration('Email', 'Entrez votre email'))
            ->add('picture', UrlType::class, $this->getConfiguration('Avatar', 'Entrez une image'))
            ->add('hash', PasswordType::class, $this->getConfiguration('Password', 'Entrez votre mot de passe'))
            ->add('hashConfirm', PasswordType::class, $this->getConfiguration('Confirmation password', 'Entrez votre mot de passe à nouveau'))
            ->add('introduction', TextareaType::class, $this->getConfiguration('Introduction', 'Présentez vous'))
            ->add('description', TextareaType::class, $this->getConfiguration('Description', 'Parlez de vous'))
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success btn-md align-items-center'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
