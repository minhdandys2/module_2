<?php
include_once '../class/Student.php';
include_once '../class/StudentManager.php';
include_once '../class/DBConnect.php';

$studentManager = new StudentManager();
$id = $_GET['id'];
$studentManager->delete($id);
header("Location:../index.php");

