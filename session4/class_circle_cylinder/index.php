<?php
include ("Circle.php");
include ("Cylinder.php");

$newCircle = new Circle("Circle",2,"black");
echo $newCircle->toString()."<br>";
echo "Acreage: ".$newCircle->area()."<br>"."<hr>";

$newCylinder = new Cylinder("Cylinder",2,"red",5);
echo $newCylinder->toString()."<br>";
echo "Volume: ".$newCylinder->volume();