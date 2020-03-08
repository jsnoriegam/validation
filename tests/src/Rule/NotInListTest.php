<?php

namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\Rule\NotInList as Rule;
use PHPUnit\Framework\TestCase;

class NotInListTest extends TestCase
{

    protected function setUp(): void
    {
        $this->rule = new Rule();
    }

    function testValidationWithoutAListOfForbiddenValues()
    {
        $this->assertTrue($this->rule->validate('abc'));
    }
}
