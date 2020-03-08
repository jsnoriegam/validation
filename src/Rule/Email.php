<?php
declare(strict_types=1);
namespace Latinosoft\Validation\Rule;

class Email extends AbstractRule
{
    const MESSAGE = 'This input must be a valid email address';

    const LABELED_MESSAGE = '{label} must be a valid email address';

    public function validate($value, string $valueIdentifier = null):bool
    {
        $this->value   = $value;
        $this->success = (filter_var((string) $value, FILTER_VALIDATE_EMAIL) !== false);

        return $this->success;
    }
}
