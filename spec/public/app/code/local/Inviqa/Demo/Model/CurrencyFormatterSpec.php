<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Inviqa_Demo_Model_CurrencyFormatterSpec extends ObjectBehavior
{
    function it_formats_dollars()
    {
        $this->formatDollars(10)->shouldReturn("USD 10");
    }
}
