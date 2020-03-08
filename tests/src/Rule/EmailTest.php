<?php

namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\Rule\Email as Rule;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{

    protected function setUp(): void
    {
        $this->rule = new Rule();
    }

    function testValidation()
    {
        $this->assertFalse($this->rule->validate(''));
        $this->assertTrue($this->rule->validate('me@domain.com'));
    }

}
