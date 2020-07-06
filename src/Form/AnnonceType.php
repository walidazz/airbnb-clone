<?php

namespace App\Form;

use App\Entity\Annonce;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\StringType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AnnonceType extends AbstractType
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
            ->add('title', TextType::class,  $this->getConfiguration('Titre', 'Tapez un titre'))
            ->add('introduction', TextType::class, $this->getConfiguration('Introduction', 'Tapez une introduction'))
            ->add('content', TextareaType::class, $this->getConfiguration('Contenu', 'Tapez une description'))
            ->add('coverImage', UrlType::class, $this->getConfiguration('Image de couverture', 'Tapez une image lol'))
            ->add('rooms', IntegerType::class, $this->getConfiguration('Chambre', 'Nombre de chambre'))
            ->add('price', MoneyType::class, $this->getConfiguration('Prix', 'Prix de la location'))
            ->add(
                'images',
                CollectionType::class,
                [
                    'entry_type' => ImageType::class,
                    'allow_add' => true,
                    'allow_delete' => true
                ]
            )
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success btn-md align-items-center'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
