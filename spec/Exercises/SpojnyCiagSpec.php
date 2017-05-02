<?php
namespace spec\Exercises;

use Exercises\SpojnyCiag;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpojnyCiagSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType(SpojnyCiag::class);
    }

    function it_works_for_empty_array()
    {
        $this->findLongest([])->shouldBe([]);
    }

    function it_works_for_multi_keys_array()
    {
        $this->findLongest([1])->shouldBe([1]);
    }

    function it_works_for_one_key_array()
    {
        $this->findLongest([2, 3, 1, 2, 3, 0, 2,])->shouldReturn([1, 2, 3]);
    }
}
