<?php
/**
 * Created by PhpStorm.
 * User: anyapps
 * Date: 02.11.2018
 * Time: 17:20
 */


//PURPOSE: EASY CHOOSE STRATEGY (of counting vat in this example)

interface Country{public function countVAT($valueToTaxation);}

class Poland implements Country{
    public function countVAT($valueToTaxation) {
        return 0.23 * $valueToTaxation;
    }
}

class England implements Country{
    public function countVAT($valueToTaxation){
        return 0.20 * $valueToTaxation;
    }
}

class Germany implements Country{
    public function countVAT($valueToTaxation) {
        return 0.19 * $valueToTaxation;
    }
}

class Tax{
    private $country;

    public function getCountry(){return $this->country;}

    public function setCountry(Country $country){
        $this->country = $country;
    }
}
