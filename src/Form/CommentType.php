<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rating', IntegerType::class, ['label' => 'Note', 'attr' => ['placeholder' => 'Attribuez une note sur 5', 'min' => 0, 'max' => 5, 'step' => 1]])
            ->add('content', TextareaType::class, ['label' => 'Commentaire', 'attr' => ['placeholder' => 'Ecrivez un commentaire...', 'require' => true]])
            ->add('Envoyez', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success btn-md align-items-center'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
