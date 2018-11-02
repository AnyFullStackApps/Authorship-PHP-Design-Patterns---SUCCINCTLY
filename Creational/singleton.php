<?php
/**
 * Created by PhpStorm.
 * User: anyapps
 * Date: 02.11.2018
 * Time: 10:16
 */
// PURPOSE: To have only one instance of this object in the application that will handle all calls.
// Example: DB connector,logger , preferences

//Preferences are global and doesnt have to be passed to any object, and we are sure we have always this same instance of Preferences
class Preferences{
    public $properties = [];
    private static $instance;

    private function __construct(){}//can NOT instance this from outside without getInstance{} because of private modifier

    public static function getInstance(){
        if(empty(self::$instance)){
            self::$instance = new Preferences();
        }

        return self::$instance;
    }
    public function setProperty($key, $value){
        $this->properties[$key] = $value;
    }

    public function getProperty($key){
        return $this->properties[$key];
    }

}