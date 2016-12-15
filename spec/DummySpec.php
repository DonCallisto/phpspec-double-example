<?php

namespace spec;

use Dummy;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DummySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Dummy::class);
    }
}
