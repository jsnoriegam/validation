<?php

namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\Rule\ArrayMaxLength as Rule;
use PHPUnit\Framework\TestCase;

class ArrayMaxLengthTest extends TestCase
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
