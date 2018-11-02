<?php
/**
 * Created by PhpStorm.
 * User: anyapps
 * Date: 02.11.2018
 * Time: 14:07
 */

//PURPOSE: treat a group of objects the same way as a single instance of the object.

interface FormInterface{
    public function render();
}

class Form implements FormInterface{
    private $elements;

    public function render(){
        $formCode = '<form>';
        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }
        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(FormInterface $element){
        $this->elements[] = $element;
    }
}

class InputElement implements FormInterface{
    public function render(){return '<input type="text" />';}
}
