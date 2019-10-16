<?php


class Circle
{
    public $name;
    public $radius;
    public $color;

    public function __construct($name,$radius, $color)
    {
        $this->name = $name;
        $this->radius = $radius;
        $this->color = $color;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }

    public function toString()
    {
    return "Name: ".$this->name."<br>"."Color: ".$this->color."<br>"."Radius: ".$this->radius;
    }
}