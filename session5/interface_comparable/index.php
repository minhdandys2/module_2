<?php
include_once "Circle.php";
include_once "Comparable.php";
include_once "ComparableCircle.php";

$circleOne = new ComparableCircle("circle one",2);
$circleTwo = new ComparableCircle("circle two",2);

echo $circleOne->comparaTo($circleTwo);