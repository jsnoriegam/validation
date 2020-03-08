<?php

declare(strict_types=1);

namespace Latinosoft\Validation\Rule;

class Required extends AbstractRule
{
    const MESSAGE = 'This field is required';
    const LABELED_MESSAGE = '{label} is required';

    public function validate($value, string $valueIdentifier = null): bool
    {
        $this->value   = $value;
        $this->success = ($value !== null && $value !== '');

        return $this->success;
    }
}
