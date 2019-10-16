<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public  function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getDiscriminant()
    {
        return $this->b * $this->b - 4 * $this->a * $this->c;
    }

    public function setRoot1()
    {
        return (-$this->b + pow($this->getDiscriminant(), 0.5)) / (2 * $this->a);
    }

    public function setRoot2()
    {
        return (-$this->b - pow($this->getDiscriminant(), 0.5)) / (2 * $this->a);
    }

    public function display()
    {
        if ($this->getDiscriminant() > 0) {
            return "The equation has two root: " . $this->setRoot1() . " and " . $this->setRoot2();
        } else if ($this->getDiscriminant() == 0) {
            return "The equation has one root: " . $this->setRoot1();
        } else if ($this->getDiscriminant() < 0) {
            return "The equation has no real roots";
        }
    }
}
