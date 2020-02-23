<?php

namespace Latinosoft\Validation;

use RuntimeException;

class ValidationException extends RuntimeException {
    private array $validationMessages;
    public function __construct($validationMessages = [], $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct("Validation Exception", $code, $previous);
        $this->validationMessages = $validationMessages;
    }

    public function getValidationMessages()
    {
        return $this->validationMessages;
    }
}