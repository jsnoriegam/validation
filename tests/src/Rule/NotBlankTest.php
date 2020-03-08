<?php

namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\Rule\NotBlank as Rule;
use PHPUnit\Framework\TestCase;

class NotBlankTest extends TestCase
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
