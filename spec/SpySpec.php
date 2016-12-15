<?php

namespace spec;

use Spy;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Spy::class);
    }
}
