<?php
include_once "Point2D.php";
include_once "Point3D.php";

$point2D = new Point2D(2.234, 5.123);
var_dump($point2D->getXY());
echo "<br>";
$point2D->toString();
echo "<br>";

$point3D = new Point3D(2.234, 5.123, 4.232);
var_dump($point3D->getXYZ());
echo "<br>";
$point3D->toString();
