<?php
include_once "Point2D.php";

class Point3D extends Point2D
{
    public $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function Point3D()
    {
        parent::Point2D();
        $this->z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function setXYZ($x, $y, $z)
    {
        parent::setXY($x, $y);
        $this->z = $z;
    }

    public function getXYZ()
    {
        return [$this->x, $this->y, $this->z];
    }

    public function toString()
    {
        echo "(" . $this->x . "," . $this->y . "," . $this->z . ")";
    }
}