<?php
declare(strict_types=1);
namespace Latinosoft\Validation\Rule\File;

use Latinosoft\Validation\Rule\AbstractRule;
use Latinosoft\Validation\Util\RuleHelper;

class Size extends AbstractRule
{
    const OPTION_SIZE = 'size';

    const MESSAGE = 'The file should not exceed {size}';

    const LABELED_MESSAGE = '{label} should not exceed {size}';

    protected $options = [
        self::OPTION_SIZE => '2M'
    ];

    public function validate($value, string $valueIdentifier = null):bool
    {
        $this->value = $value;
        if (! file_exists($value)) {
            $this->success = false;
        } else {
            $fileSize      = @filesize($value);
            $limit         = RuleHelper::normalizeFileSize($this->options[self::OPTION_SIZE]);
            $this->success = $fileSize && $fileSize <= $limit;
        }

        return $this->success;
    }
}
