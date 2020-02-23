<?php

namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\Rule\NotBlank as Rule;

class NotBlankTest extends \PHPUnit\Framework\TestCase
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
