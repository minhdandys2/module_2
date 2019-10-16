<?php

include_once('MovablePoint.php');
include_once ('Point.php');

$newPoint = new Point(4,7);
var_dump($newPoint->getXY());
echo "New Point: ".$newPoint->toString()."<br>"."<hr>";

$newMovablePoint = new MovablePoint(4,2,4,1);
var_dump($newMovablePoint->getSpeed());
echo "New Movable Point: ".$newMovablePoint->toString()."<br>";
echo "Move: ".$newMovablePoint->move();

