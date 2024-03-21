<?php

namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class StringToDateTransformer implements DataTransformerInterface
{
    public function transform($value)
    {
        dump('hereee transform' , $value);
        // Transform the DateTime object to a string (optional)
        if (null === $value) {
            return '';
        }

        return $value->format('Y-m-d');
    }

    public function reverseTransform($value): \DateTime
    {
        dump('hereee reverseTransform');
        // Transform the string to a DateTime object
        try {
            return new \DateTime($value);
        } catch (\Exception $e) {
            throw new TransformationFailedException('Invalid date format');
        }
    }
}

