<?php

use Inviqa_Demo_Model_ForeignExchange as ForeignExchange;

class Inviqa_Demo_Model_GoogleForeignExchange implements ForeignExchange
{
    public function getGBPtoUSDRate()
    {
        $url = "http://www.google.com/ig/calculator?hl=en&q=rate";
        $ch = curl_init();
        curl_setopt ($ch, CURLOPT_URL, $url);
        $response = curl_exec($ch);

        return $response['rate'];
    }
}