<?php
/**
 * Created by PhpStorm.
 * User: anyapps
 * Date: 02.11.2018
 * Time: 10:39
 */

//Builder returns complete object at the end of building, but factory immediately

interface Pizza{
    public function getName();
}
class HawaiianPizza implements Pizza{
    public function getName() {
        return "Hawalian pizza";
    }
}
class DeluxePizza implements Pizza{
    public function getName() {
        return "Deluxe pizza";
    }
}

interface CreatorInterface{
    public function create($typeOfPizza);
}

class PizzaCreator implements CreatorInterface{

    public function create($typeOfPizza){
        switch ($typeOfPizza){
            case "Hawalian":
                return new HawaiianPizza();
                break;
            case  "Deluxe":
                return new DeluxePizza();
        }
    }
}