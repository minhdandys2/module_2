<?php
include_once "CircleComparator.php";

$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();

echo $circleComparator->compareTo($circleOne, $circleTwo);