<?php
/**
 * Created by PhpStorm.
 * User: anyapps
 * Date: 02.11.2018
 * Time: 09:37
 */

include('Creational/builder.php');
include('Creational/singleton.php');
include('Creational/factory_method.php');
include('Creational/abstract_factory.php');


echo "/************************************************* BUILDER *************************************************/<br><br>";
$director = new Director();
/** @var Car $smallCar */
$smallCar = $director->build(new MediumCar());
echo "This Car has: $smallCar->doors doors and $smallCar->seats seats"; //RETURNS -> This Car has: 5 doors and 5 seats



echo "<br><br>/**************************************** SINGLETON *************************************************/<br><br>";
$preferences = Preferences::getInstance();
$preferences->setProperty('host','anyapps.pl');
echo $preferences->getProperty('host');//RETURNS -> anyapps.pl



echo "<br><br>/**************************************** FACTORY METHOD *************************************************/<br><br>";
$pizza = new PizzaCreator();
$order = $pizza->create("Deluxe");
echo $order->getName(); //RETURNS -> Deluxe pizza


echo "<br><br>/**************************************** ABSTRACT FACTORY *************************************************/<br><br>";
$factory = new MicrosoftOfficeFactory();
$factory->getDOC()->render(); //RETURNS -> This is MS Office Doc
echo "<br>";
$factory->getPDF()->render();  //RETURNS -> This is MS Pdf