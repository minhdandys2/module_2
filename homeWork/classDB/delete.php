<?php
include_once 'Student.php';
include_once 'StudentManager.php';
include_once 'DBconnect.php';

$studentManager = new StudentManager();
$id = $_GET['id'];
$studentManager->delete($id);
header("Location:index.php");

