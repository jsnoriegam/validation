<?php
namespace Latinosoft\Validation\Rule\File;

use Latinosoft\Validation\Rule\AbstractRule;

class Size extends AbstractRule
{
    const OPTION_SIZE = 'size';

    const MESSAGE = 'The file should not exceed {size}';

    const LABELED_MESSAGE = '{label} should not exceed {size}';

    protected $options = array(
        self::OPTION_SIZE => '2M'
    );

    protected function normalizeSize($size)
    {
        $units = array( 'B' => 0, 'K' => 1, 'M' => 2, 'G' => 3 );
        $unit  = strtoupper(substr($size, strlen($size) - 1, 1));
        if (! isset($units[$unit])) {
            $normalizedSize = filter_var($size, FILTER_SANITIZE_NUMBER_INT);
        } else {
            $size           = filter_var(substr($size, 0, strlen($size) - 1), FILTER_SANITIZE_NUMBER_FLOAT);
            $normalizedSize = $size * pow(1024, $units[$unit]);
        }

        return $normalizedSize;
    }

    public function validate($value, $valueIdentifier = null)
    {
        $this->value = $value;
        if (! file_exists($value)) {
            $this->success = false;
        } else {
            $fileSize      = @filesize($value);
            $limit         = $this->normalizeSize($this->options[self::OPTION_SIZE]);
            $this->success = $fileSize && $fileSize <= $limit;
        }

        return $this->success;
    }
}
