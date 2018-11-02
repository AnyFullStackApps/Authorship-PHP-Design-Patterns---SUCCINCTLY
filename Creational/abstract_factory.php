<?php
/**
 * Created by PhpStorm.
 * User: anyapps
 * Date: 02.11.2018
 * Time: 11:01
 */

//PURPOSE: create interface to create object from this same family

/** DOC */
interface DOCextension{
    public function render();
}

class MicrosoftOfficeDOC implements DOCextension{
    public function render(){echo "This is MS Office Doc";}
}
class OpenOfficeDOC implements DOCextension{
    public function render(){echo "This is OpenOffice Doc";}
}



/** PDF */
interface PDFextension{
    public function render();
}

class MicrosoftOfficePDF implements PDFextension{
    public function render(){echo "This is MS Pdf";}
}
class OpenOfficePDF implements PDFextension{
    public function render(){echo "This is OpenOffice Pdf";}
}

/**....here we can add another extensions */


/** FACTORY */
abstract class Factory{
    abstract function getDOC();
    abstract function getPDF();
}

class MicrosoftOfficeFactory extends Factory {
    function getDOC(){return new MicrosoftOfficeDOC();}
    function getPDF(){return new MicrosoftOfficePDF();}
}

class OpenOfficeFactory extends Factory {
    function getDOC(){return new OpenOfficeDOC();}
    function getPDF(){return new OpenOfficePDF();}
}
