<?php

namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\DataWrapper\ArrayWrapper;
use Latinosoft\Validation\Rule\NotMatch as Rule;
use PHPUnit\Framework\TestCase;

class NotMatchTest extends TestCase
{

    protected function setUp(): void
    {
        $this->rule = new Rule();
        $this->rule->setContext(
            new ArrayWrapper(
                array(
                    'password' => 'secret'
                )
            )
        );
    }

    function testValidationWithItemPresent()
    {
        $this->rule->setOption(Rule::OPTION_ITEM, 'password');
        $this->assertFalse($this->rule->validate('secret'));
        $this->assertTrue($this->rule->validate('abc'));
    }

    function testValidationWithoutItemPresent()
    {
        $this->assertFalse($this->rule->validate('abc'));
        $this->assertFalse($this->rule->validate(null));
    }
}
