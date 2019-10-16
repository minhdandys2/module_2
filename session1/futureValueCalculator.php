<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Future Value Calculator</title>
</head>
<body>
<form method="post">
    <h1>Future Value Calculator</h1>
    Investement Amount  :<input type="text" name="investementAmount"><br>
    Yearly Interest Rate:<input type="text" name="phanTram"><br>
    Number of Years     :<input type="text" name="year"><br>
    <input type="submit" value="calculate">
</form>
<?php

if ($_SERVER[REQUEST_METHOD] == "POST") {
    $investementAmount = $_POST["investementAmount"];
    $yearlyInterestRate = $_POST["phanTram"];
    $year = $_POST["year"];
    $calculation =$investementAmount;
    if ($investementAmount == 0) {
        echo "Investment is a required field";
    }else if ($investementAmount < 0) {
        echo "Investment must be greater than zero";
    }else {
    for ($x =1;$x <= $year; $x++) {
        $calculation += $investementAmount * $yearlyInterestRate/100;
        $investementAmount = $calculation;
    }
    echo ' <h1>Future Value Calculator</h1><br>
    Investement Amount  :'.$_POST["investementAmount"].'<br>
    Yearly Interest Rate:'.$yearlyInterestRate.'<br>
    Number of Years     :'.$year.'<br>
    Future Value : '.$calculation;
}
}
?>
</body>
</html>
