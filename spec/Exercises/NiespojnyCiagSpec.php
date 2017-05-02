<?php

namespace spec\Exercises;

use Exercises\NiespojnyCiag;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NiespojnyCiagSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(NiespojnyCiag::class);
    }


    function it_works()
    {

        $arr = [4, 2, 4, 1, 7, 3];
        $result = [2, 4, 7];

        $this->getSequence($arr)->shouldReturn($result);
    }


}
