<?php
declare(strict_types=1);
namespace Latinosoft\Validation\Rule;

class GreaterThan extends AbstractRule
{
    const OPTION_MIN = 'min';
    const OPTION_INCLUSIVE = 'inclusive';

    const MESSAGE = 'This input should be greater than {min}';
    const LABELED_MESSAGE = '{label} should be greater than {min}';

    protected $options = [
        'inclusive' => true
    ];

    protected $optionsIndexMap = [
        0 => self::OPTION_MIN,
        1 => self::OPTION_INCLUSIVE
    ];

    public function validate($value, string $valueIdentifier = null):bool
    {
        $this->value = $value;
        if (! isset($this->options['min'])) {
            $this->success = true;
        } else {
            if ($this->options['inclusive']) {
                $this->success = $value >= $this->options['min'];
            } else {
                $this->success = $value > $this->options['min'];
            }
        }

        return $this->success;
    }
}
