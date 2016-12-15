<?php

namespace spec;

use Mock;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MockSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Mock::class);
    }
}
