<?php

use Inviqa_Demo_Model_ForeignExchange as ForeignExchange;

class Inviqa_Demo_Model_FakeForeignExchange implements ForeignExchange
{
    public function getGBPtoUSDRate()
    {
        return 1.2;
    }
}