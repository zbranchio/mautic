<?php

namespace Mautic\EmailBundle\Validator;

use Symfony\Component\Validator\Constraint;

class MultipleEmailsValid extends Constraint
{
    public function getTargets()
    {
        return self::PROPERTY_CONSTRAINT;
    }
}
