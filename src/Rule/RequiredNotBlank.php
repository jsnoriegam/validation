<?php
namespace Latinosoft\Validation\Rule;

class Required extends AbstractRule
{
    const MESSAGE = 'This field is required and must not be blank';
    const LABELED_MESSAGE = '{label} is required and must not be blank';

    public function validate($value, $valueIdentifier = null)
    {
        $this->value   = $value;
        $this->success = ($value !== null && trim($value) !== '');

        return $this->success;
    }
}
