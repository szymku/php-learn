<?php
namespace spec\Exercises;

use Exercises\Fibonacci;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Console\Tests\Input\InputTest;

class FibonacciSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType(Fibonacci::class);
    }

    public function it_normal_works()
    {
        $this->fibNormal(3)->shouldReturn(2);
        $this->fibNormal(5)->shouldReturn(5);
        $this->fibNormal(7)->shouldReturn(13);
    }

    public function it_recursive_works()
    {
        $this->fibRecursive(3)->shouldReturn(2);
        $this->fibRecursive(5)->shouldReturn(5);
        $this->fibRecursive(7)->shouldReturn(13);
    }

    public function it_closure_works()
    {
        $this->fibClosureCount(3)->shouldReturn(2);
        $this->fibClosureCount(5)->shouldReturn(5);
        $this->fibClosureCount(7)->shouldReturn(13);
    }
}
