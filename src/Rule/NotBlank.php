<?php
namespace Latinosoft\Validation\Rule;

class NotBlank extends AbstractRule
{
    const MESSAGE = 'This field must not be blank';
    const LABELED_MESSAGE = '{label} must not be blank';

    public function validate($value, $valueIdentifier = null)
    {
        $this->value   = $value;
        $this->success = ($value !== null && trim($value) !== '');

        return $this->success;
    }
}
