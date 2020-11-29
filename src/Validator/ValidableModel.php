<?php

namespace ColdBolt\Validator;

interface ValidableModel {
    public function validate(): bool;
    public function getErrors(): array;
}