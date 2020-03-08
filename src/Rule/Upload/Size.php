<?php
declare(strict_types=1);
namespace Latinosoft\Validation\Rule\Upload;

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
        if (! is_array($value) || ! isset($value['tmp_name'])) {
            $this->success = false;
        } elseif (! file_exists($value['tmp_name'])) {
            $this->success = $value['error'] === UPLOAD_ERR_NO_FILE;
        } else {
            $fileSize      = @filesize($value['tmp_name']);
            $limit         = RuleHelper::normalizeFileSize($this->options[self::OPTION_SIZE]);
            $this->success = $fileSize && $fileSize <= $limit;
        }

        return $this->success;
    }
}
