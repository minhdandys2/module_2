<?php
include_once 'Student.php';
include_once 'StudentManager.php';

if ($_SERVER['REQUEST_METHOD']='POST'){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $student = new Student($name,$phone,$address);
    $studentManager = new StudentManager();
    $studentManager->add($student);
}
header("Location:index.php");