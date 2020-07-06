<?php

namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class FrenchToDateTimeTransformer implements DataTransformerInterface
{

    public function transform($date)
    {
        if ($date === null) {
            return '';
        }
        return $date->format('d/m/y');
    }

    public function reverseTransform($frenchDate)
    {
        if ($frenchDate === null) {
            # code...
            throw new TransformationFailedException("vous devez fournir une date");
        }
        $date = \DateTime::createFromFormat('d/m/Y', $frenchDate);


        if ($date === false) {
            # code...
            throw new TransformationFailedException("le format n'est pas bon");
        }
        return $date;
    }
}
