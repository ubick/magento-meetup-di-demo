<?php

class Inviqa_Demo_Model_CurrencyFormatter
{
    public function formatDollars($dollars)
    {
        return sprintf("USD %d", $dollars);
    }
}