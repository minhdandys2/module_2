<?php
include_once 'Student.php';
include_once 'DBconnect.php';
include_once 'StudentManager.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentManager = new StudentManager();
    $index = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $data = new Student($name, $phone, $address);
    $studentManager->update($index, $data);
    header("Location:index.php");
}