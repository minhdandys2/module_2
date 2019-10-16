<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h3>Day of birth</h3>
        <input type="date" name="dateOfBirth">
        <button type="submit">Count</button>
    </form>
<?php
include ("caculateAge.php");
echo $age;
?>
</body>
</html>
