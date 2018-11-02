<?php
/**
 * Created by PhpStorm.
 * User: anyapps
 * Date: 02.11.2018
 * Time: 10:06
 */


//PURPOSE: Builder is an interface that build parts of a COMPLEX object.
//Exaple: PHPUnit: Mock Builder

//Builder returns complete object at the end of building, but factory immediately

class Car{
    const SEATS_SMALL = 2;
    const SEATS_MEDIUM = 5;
    const SEATS_BIG = 7;
    const DOORS_SMALL = 3;
    const DOORS_BIG = 5;

    public $doors;
    public $seats;

    function getDoors(){
        return $this->doors;
    }

    function getSeats(){
        return $this->seats;
    }
}

abstract class AbstractCar{ // abstract class instead of Interface to implement constructor
    protected $car;

    public function __construct(){ //construct here cause not repeat in every builder
        $this->car = new Car();
    }

    abstract function setDoors();
    abstract function setSeats();

    function getVehicle(){
        return $this->car;
    }

}

/**
 * Class SmallCar  - 5doors 7 seats
 */
class BigCar extends AbstractCar {
    function setDoors(){$this->car->doors = Car::DOORS_BIG;}
    function setSeats(){$this->car->seats = Car::SEATS_BIG;}
}

/**
 * Class SmallCar  - 5 doors 5 seats
 */
class MediumCar extends AbstractCar {
    function setDoors(){$this->car->doors = Car::DOORS_BIG;}
    function setSeats(){$this->car->seats = Car::SEATS_MEDIUM;}
}

/**
 * Class SmallCar  - 3 doors 2 seats
 */
class SmallCar extends AbstractCar {
    function setDoors(){$this->car->doors = Car::DOORS_SMALL;}
    function setSeats(){$this->car->seats = Car::SEATS_SMALL;}
}

class Director{// need to be abstraction aware(Interface or abstract class)
    public function build(AbstractCar $builder){
        $builder->setDoors();
        $builder->setSeats();

        return $builder->getVehicle();//car object
    }
}