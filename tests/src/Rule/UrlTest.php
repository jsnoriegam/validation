<?php
namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\Rule\Url as Rule;
use PHPUnit\Framework\TestCase;

class UrlTest extends TestCase
{
    protected function setUp(): void
    {
        $this->rule = new Rule();
    }

    function testValidation()
    {
        $this->assertFalse($this->rule->validate(''));
        $this->assertTrue($this->rule->validate('http://www.google.com'));
    }
}
