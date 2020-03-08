<?php

namespace Latinosoft\Validation\Rule;

use Latinosoft\Validation\Rule\Website as Rule;
use PHPUnit\Framework\TestCase;

class WebsiteTest extends TestCase
{

    protected function setUp(): void
    {
        $this->rule = new Rule();
    }

    function testNonHttpAddresses()
    {
        $this->assertTrue($this->rule->validate('//google.com'));
    }
}
