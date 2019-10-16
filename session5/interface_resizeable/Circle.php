<?php
include_once "Resizeable.php";

class Circle implements Resizeable
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function resize()
    {
        $this->radius *= rand(1, 100);
    }

    public function display()
    {
        return "Radius is: " . $this->radius;
    }

}