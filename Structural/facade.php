<?php
/**
 * Created by PhpStorm.
 * User: anyapps
 * Date: 02.11.2018
 * Time: 14:20
 */

//PURPOSE: minimize the communication and dependencies between subsystems
class User{
    public function login() {echo "Login to system\n";}
}

class Cart{
    public function getItems() {echo "Cart Items\n";}
}

class Product{
    public function getAll() {echo "All Products\n";}
}

class Facade{
    private $user;
    private $cart;
    private $product;

    public function __construct() {
        $this->user = new User();
        $this->cart = new Cart();
        $this->product = new Product();
    }

    public function login() {$this->user->login();}

    public function getBuyProducts() {$this->cart->getItems();}

    public function getProducts() {$this->product->getAll();}
}
