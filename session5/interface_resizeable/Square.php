<?php
include_once "Resizeable.php";

class Square extends Rectangle implements Resizeable
{
    public function __construct($width)
    {
        parent::__construct($width, $width);
    }

    public function resize()
    {
        parent::resize();
    }
    public function display()
    {
        return "Square: ".$this->width;
    }
}