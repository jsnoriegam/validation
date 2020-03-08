<?php

namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\Rule\ArrayMinLength as Rule;
use PHPUnit\Framework\TestCase;

class ArrayMinLengthTest extends TestCase
{

    protected function setUp(): void
    {
        $this->rule = new Rule();
    }

    function testValidationWithoutALimit()
    {
        $this->assertTrue($this->rule->validate(array()));
    }
}
