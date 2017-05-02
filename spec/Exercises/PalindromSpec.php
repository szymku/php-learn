<?php
namespace spec\Exercises;

use Exercises\Palindrom;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PalindromSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType(Palindrom::class);
    }

    function it_sends_an_email()
    {
        $string = 'pop';
        $this->checkIfPalindrom($string)->shouldReturn(true);
    }

    function it_works_for_more_than_2_letters()
    {
        $string = 'pop';
        $this->checkIfPalindrom($string)->shouldReturn(true);
    }

    function it_works_for_0_letters()
    {
        $string = "";
        $this->checkIfPalindrom($string)->shouldReturn(true);
    }

    function it_works_for_1_letters()
    {
        $string = "p";
        $this->checkIfPalindrom($string)->shouldReturn(true);
    }

    function it_works_for_2_letters()
    {
        $string = "pp";
        $this->checkIfPalindrom($string)->shouldReturn(true);
    }

    function it_works_for_not_a_polindrom()
    {
        $string = "abc";
        $this->checkIfPalindrom($string)->shouldReturn(FALSE);
    }
}
