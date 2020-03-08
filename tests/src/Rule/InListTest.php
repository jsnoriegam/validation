<?php

namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\Rule\InList as Rule;
use PHPUnit\Framework\TestCase;

class InListTest extends TestCase
{

    protected function setUp(): void
    {
        $this->rule = new Rule();
    }

    function testValidationWithoutALIstOfAcceptableValues()
    {
        $this->assertTrue($this->rule->validate('abc'));
    }
}
