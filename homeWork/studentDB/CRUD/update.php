<?php
include_once '../class/Student.php';
include_once '../class/DBConnect.php';
include_once '../class/StudentManager.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentManager = new StudentManager();
    $index = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $images = $_FILES['image']['name'];
    $tmp_dir = $_FILES['image']['tmp_name'];

    $upload_dir = "upload/".basename($images);
    $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
    $picProfile = rand(1000, 1000000).".".$imgExt;
    move_uploaded_file($tmp_dir, $upload_dir);

    $data = new Student($name, $phone, $address,$upload_dir);
    $studentManager->update($index, $data);
    header("Location: ../index.php");
}