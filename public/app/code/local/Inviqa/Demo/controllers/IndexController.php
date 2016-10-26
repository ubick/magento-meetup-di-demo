<?php

use Inviqa_SymfonyContainer_Helper_ServiceProvider as ServiceProvider;
use Inviqa_Demo_Model_CurrencyConverter as CurrencyConverter;

class Inviqa_Demo_IndexController extends Mage_Core_Controller_Front_Action
{
    use ServiceProvider;

    public function indexAction()
    {
        /** @var CurrencyConverter $currencyConverter */
        $currencyConverter = $this->getService('inviqa.demo.currency_converter');

        echo $currencyConverter->convertGBPToUSD(33);
    }
}