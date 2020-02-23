<?php

namespace Latinosoft\Validation;

use RuntimeException;

class ValidationException extends RuntimeException {
    public function __construct($validationMessages = [], $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct("Validation Exception", $code, $previous);
    }
}