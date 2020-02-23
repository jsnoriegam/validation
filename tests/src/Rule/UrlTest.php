<?php

namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\Rule\Url as Rule;

class UrlTest extends \PHPUnit\Framework\TestCase
{
    function setUp(): void
    {
        $this->rule = new Rule();
    }

    function testValidation()
    {
        $this->assertFalse($this->rule->validate(''));
        $this->assertTrue($this->rule->validate('http://www.google.com'));
    }
}
