<?php
/**
 * Created by PhpStorm.
 * User: anyapps
 * Date: 02.11.2018
 * Time: 13:37
 */

//PURPOSE: To dynamically add new functionality to class instances.

interface CarRentOffer{
    public function getPrice();
}

final class Basic implements CarRentOffer{
    public function getPrice(){return 100;}
}

final class GPS implements CarRentOffer{ //this is decorator

    private $offer;
    public function __construct(CarRentOffer $offer){$this->offer = $offer;}

    public function getPrice(){
        return $this->offer->getPrice() + 50;
    }
}

final class Insurance implements CarRentOffer{ //this is decorator

    private $offer;
    public function __construct(CarRentOffer $offer){$this->offer = $offer;}

    public function getPrice(){
        return $this->offer->getPrice() + 80;
    }
}