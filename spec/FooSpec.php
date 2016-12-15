<?php

namespace spec;

use Dummy;
use Foo;
use Mock;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Spy;
use Stub;

class FooSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Foo::class);
    }

    function it_use_spy(Spy $spy)
    {
        // $this->useSpy($spy)->shouldReturn(2);
        $this->useSpy($spy);

        $spy->first()->shouldHaveBeenCalled();
    }

    function it_use_mock(Mock $mock)
    {
        $mock->first()->shouldBeCalled();

        $this->useMock($mock);
    }

    function is_use_dummy(Mock $mock, Dummy $dummy)
    {
        $mock->useDummy($dummy)->shouldBeCalled();

        $this->useMockAndDummy($mock, $dummy);
    }

    function it_use_stub(Stub $stub)
    {
        $stub->second()->willReturn(1);
        $this->useStub($stub)->shouldReturn(1);
    }
}
