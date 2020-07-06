<?php

namespace App\Form;

use App\Entity\Booking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Form\DataTransformer\FrenchToDateTimeTransformer;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BookingType extends AbstractType
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


    private $transformer;
    public function __construct(FrenchToDateTimeTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startDate', TextType::class, ['label' => 'date de début', 'attr' => ['placeholder' => 'date à laquelle vous venez']])
            ->add('endDate', TextType::class, ['label' => 'date de fin', 'attr' => ['placeholder' => 'date à laquelle vous parez']])
            ->add('comment', TextareaType::class, $this->getConfiguration(false, 'Laissez un commentaire...', ['require' => false]))
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success btn-md align-items-center'
                ]
            ]);

        $builder->get('startDate')->addModelTransformer($this->transformer);
        $builder->get('endDate')->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}
