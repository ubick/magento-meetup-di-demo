<?php

use Inviqa_Demo_Model_CurrencyFormatter as CurrencyFormatter;
use Inviqa_Demo_Model_ForeignExchange as ForeignExchange;

class Inviqa_Demo_Model_CurrencyConverter
{
    private $foreignExchange;
    private $currencyFormatter;

    public function __construct(
        ForeignExchange $foreignExchange,
        CurrencyFormatter $currencyFormatter
    )
    {
        $this->foreignExchange = $foreignExchange;
        $this->currencyFormatter = $currencyFormatter;
    }

    public function convertGBPToUSD($amount)
    {
        $dollars = $amount * $this->foreignExchange->getGBPtoUSDRate();

        return $this->currencyFormatter->formatDollars($dollars);
    }
}