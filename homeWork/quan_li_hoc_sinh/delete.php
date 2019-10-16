<?php
$id = $_GET['id'];
include_once "managerStudent.php";
$listStudent = $manager->readFileJsonToArray();
array_splice($listStudent, $id, 1);
$manager->saveDataToJson($listStudent);
header('Location:index.php');
