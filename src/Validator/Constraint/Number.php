<?php

namespace ColdBolt\Validator\Constraint;

#[\Attribute(\Attribute::TARGET_PROPERTY)]
class Number extends Constraint
{
    public function __construct(?int $min = null, ?int $max = null)
    {

    }

    public function validate(): bool
    {
        if (!is_numeric($this->data)) {
            $this->addError('Invalid Number');
        }

        return empty($this->getErrors());
    }
}