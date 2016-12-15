<?php

namespace spec;

use Stub;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StubSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Stub::class);
    }
}
