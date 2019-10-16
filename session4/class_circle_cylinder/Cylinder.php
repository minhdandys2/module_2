<?php
include_once("Circle.php");

class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius, $color, $height)
    {
        parent::__construct($name, $radius, $color);
        $this->height = $height;
    }

    public function area()
    {
        return parent::area() * 2 + 2 * pi() * $this->radius * $this->height;
    }

    public function volume()
    {
        return parent::area() * $this->height;
    }

    public function toString()
    {
        return parent::toString() . "<br>" . "Height: " . $this->height;
    }
}