<?php
include_once "Colorable.php";

class Square implements \Colorable {
    public $width;
    public function __construct($width)
    {
        $this->width = $width;
    }

    public function howTocolor()
    {
        return "Color all four sides.";
    }
    public function calArea(){
        return pow($this->width,2);
    }
    public function toString(){
        return "Square has side is $this->width, the Area is ".$this->calArea()." how to color is ".$this->howToColor();
    }
}