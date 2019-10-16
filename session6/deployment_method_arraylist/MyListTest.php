<?php
include_once "MyList.php";
$myList = new MyList();
$myList->MyList();
$myList->addLastArray(1);
$myList->addLastArray(2);
$myList->addLastArray(3);
$myList->addLastArray(4);
$myList->addLastArray(5);
$myList->add(3, 7);
$myList->remove(2);
$myList->size();
print_r($myList->display());
echo "<br>";
var_dump($myList->clear());
