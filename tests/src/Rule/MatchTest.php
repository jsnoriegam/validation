<?php

namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\DataWrapper\ArrayWrapper;
use Latinosoft\Validation\Rule\Match as Rule;
use PHPUnit\Framework\TestCase;

class MatchTest extends TestCase
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
        $this->assertTrue($this->rule->validate('secret'));
        $this->assertFalse($this->rule->validate('abc'));
    }

    function testValidationWithoutItemPresent()
    {
        $this->assertTrue($this->rule->validate('abc'));
        $this->assertTrue($this->rule->validate(null));
    }

}
