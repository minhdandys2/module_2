

<?php
include_once "User.php";
include_once "Student.php";
include_once "managerStudent.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET["name"])) {
        $name = $_GET["name"];
    }
    if (!empty($_GET["address"])) {
        $address = $_GET["address"];
    }
    if (!empty($_GET["phone"])) {
        $phone = $_GET["phone"];
    }
    if (!empty($_GET["role"])) {
        $role = $_GET["role"];
    }
    if (!empty($_GET["group"])) {
        $group = $_GET["group"];
    }
}
$student_one = new Student($name, $address, $phone, $role, $group);
$manager->addFile($student_one);
header("Location: index.php");
?>

