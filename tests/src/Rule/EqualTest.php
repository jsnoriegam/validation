<?php

namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\Rule\Equal as Rule;
use PHPUnit\Framework\TestCase;

class EqualTest extends TestCase
{

    protected function setUp(): void
    {
        $this->rule = new Rule();
    }

    function testValidationWithOptionSet()
    {
        $this->rule->setOption(Rule::OPTION_VALUE, '123');
        $this->assertTrue($this->rule->validate('123'));
        $this->assertFalse($this->rule->validate('abc'));
    }

    function testValidationWithoutOptionSet()
    {
        $this->assertTrue($this->rule->validate('abc'));
        $this->assertTrue($this->rule->validate(null));
    }

}
