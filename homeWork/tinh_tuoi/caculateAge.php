<?php
$age = '';
$dateOfBirth = $_POST["dateOfBirth"];
if ($dateOfBirth !== null) {
    $s = caculateAge($dateOfBirth);
    $age = "Date of birth: ".$dateOfBirth."<br>"."Tuoi: ".ceil($s / 31536000);
}

function caculateAge($day)
{
    return (strtotime(date("d/m/Y")) - strtotime($day));
}
