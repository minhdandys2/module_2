<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "admin" && $password == "admin") {
        echo "<h2>Welcome ".$username." to website</h2>";
    }else{
        echo "<h2>Login Error";
    }
}
?>
<form method="post">
<div class="login">
    <h2>Login</h2>
    <input type="text" name="username" size="30" placeholder="username">
    <input type="password" name="password" size="30" placeholder="password">
    <input type="submit" value="Sign in">
</div>
</form>
</body>
</html>
