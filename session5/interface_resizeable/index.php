<?php
include_once 'Rectangle.php';
include_once 'Circle.php';
include_once 'Square.php';


$rectangle = new Rectangle(5, 2);
echo $rectangle->display();
echo "<br>";
$rectangle->resize();
echo "Resize: " . $rectangle->display();
echo "<br>";

$circle = new Circle(6);
echo $circle->display();
echo "<br>";
$circle->resize();
echo "Resize: " . $circle->display();
echo "<br>";

$square = new Square(5);
echo $square->display();
echo "<br>";
$square->resize();
echo "Resize: " . $square->display();