<?php

namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\DataWrapper\ArrayWrapper;
use Latinosoft\Validation\Rule\RequiredNotBlank as Rule;

class RequiredNotBlankTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var Rule
     */
    protected $rule;

    function setUp(): void
    {
        $this->rule = new Rule();
    }

    function testValidationWithNull()
    {
        $this->assertFalse($this->rule->validate(null));
    }

    function testValidationWithEmptyString()
    {
        $this->assertFalse($this->rule->validate(''));
    }

    function testValidationWithWhitespaceString()
    {
        $this->assertFalse($this->rule->validate('  '));
    }
}
