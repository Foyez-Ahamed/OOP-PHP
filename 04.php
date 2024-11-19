<!-- ei tutorial theke amra ekta RGB color code theke #ff0000 = 255 00 00 kivabe hexadecimal code ber kore ante hoy seta dekhbo-->

<?php

class RGB
{

    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    function getColor()
    {
        return $this->color;
    }

    function getRGBcolor()
    {
        return array($this->red, $this->green, $this->blue);
    }

    function readRGBcolor()
    {
        echo " Red = {$this->red}\n Green = {$this->green}\n Blue = {$this->blue} ";
    }

    function setColor($colorCode)
    {
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    private function parseColor()
    {
        if ($this->color) {
            list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');



        } else {
            list($this->red, $this->green, $this->blue) = array(0, 0, 0);
        }

    }

    function getRed()
    {
        return $this->red;
    }

    function getGreen()
    {
        return $this->green;
    }

    function getBlue()
    {
        return $this->blue;
    }

}

// lets create a object //
$myColor = new RGB('#ffe2ff');
$myColor->readRGBcolor();



