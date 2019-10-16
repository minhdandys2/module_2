<?php

include_once "Shape.php";
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";

$circle = new Circle("Circle", 3);
echo "Name: ".$circle->name."<br>";
echo "Circle are: " . $circle->calculateArea() . "<br>";
echo "Circle perimeter: " . $circle->calculatePerimeter() . "<br>"."<hr>";

$cylinder = new Cylinder("Cylinder", 3, 4);
echo "Name: ".$cylinder->name."<br>";
echo "Cylinder area: " . $cylinder->calculateArea() . "<br>";
echo "Cylinder volume: " . $cylinder->calculateVolume() . "<br>"."<hr>";

$rectangle = new Rectangle("Rectangle", 3, 4);
echo "Name: ".$rectangle->name."<br>";
echo "Rectangle area: " . $rectangle->calculateArea() . "<br>";
echo "Rectangle perimeter: " . $rectangle->calculatePerimeter() . "<br>"."<hr>";

$square = new Square("Square", 4);
echo "Name: ".$square->name."<br>";
echo "Square area: " . $square->calculateArea() . "<br>";
echo "Square perimeter: " . $square->calculatePerimeter() . "<br>";