<?php

namespace spec;

use Inviqa_Demo_Model_CurrencyFormatter as CurrencyFormatter;
use Inviqa_Demo_Model_ForeignExchange as ForeignExchange;
use PhpSpec\ObjectBehavior;

class Inviqa_Demo_Model_CurrencyConverterSpec extends ObjectBehavior
{
    function let(ForeignExchange $foreignExchange, CurrencyFormatter $currencyFormatter)
    {
        $this->beConstructedWith($foreignExchange, $currencyFormatter);
    }

    function it_converts_usd(ForeignExchange $foreignExchange, CurrencyFormatter $currencyFormatter)
    {
        $foreignExchange->getGBPtoUSDRate()->willReturn(1.2);
        $currencyFormatter->formatDollars(120)->willReturn("USD 120");

        $this->convertGBPToUSD(100)->shouldReturn("USD 1210");
    }
}
