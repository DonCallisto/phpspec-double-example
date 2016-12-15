<?php

class Foo
{
    public function useSpy(Spy $spy)
    {
        $spy->first();

        return $spy->second();
    }

    public function useMock(Mock $mock)
    {
        $mock->first();

        // return $mock->second();
        return true;
    }

    public function useMockAndDummy(Mock $mock, Dummy $dummy)
    {
        $mock->useDummy($dummy);
        $dummy->first();
        $dummy->second();

        return true;
    }

    public function useStub(Stub $stub)
    {
        // $stub->first();
        return $stub->second();
    }
}
