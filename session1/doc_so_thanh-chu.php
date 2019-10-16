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
    <div >
        <input type="text" name="name" size="10" placeholder="nhập số"/><br>
        <input type="submit" value="Kết quả cần tìm ra chữ"/>
    </div>
</form>
<?php
$so1 = array(
    "0" => "zero",
    "1" => "one",
    "2" => "two",
    "3" => "three",
    "4" => "four",
    "5" => "five",
    "6" => "six",
    "7" => "seven",
    "8" => "eight",
    "9" => "nine",
    "10" => "ten",
    "11" => "eleven",
    "12" => "twelve",
    "13" => "thirteen",
    "14" => "fourteen",
    "15" => "fifteen",
    "16" => "sixteen",
    "17" => "seventeen",
    "18" => "eighteen",
    "19" => "nineteen",
);
$so2 = array(
    "1" => "ten",
    "2" => "twenty",
    "3" => "thirty",
    "4" => "forty",
    "5" => "fifty",
    "6" => "sixty",
    "7" => "seventy",
    "8" => "eighty",
    "9" => "ninety",
);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number = $_POST["name"];
    if ($number < 20) {
        foreach ($so1 as $key => $value1) {
            if ($number == $key) {
                echo $value1;
            }
        }
    } else if ($number > 19 && $number < 100) {
        $tenth = floor($number / 10);
        $unit = floor($number - $tenth * 10);
        foreach ($so2 as $item => $value2) {
            if ($tenth == $item) {
                echo $value2 . " ";
            }
        }
        foreach ($so1 as $key => $value3) {
            if ($unit == $key && $unit != 0) {
                echo $value3;
            }
        }
    } else if ($number > 99 && $number < 1000) {
        $hundred = floor($number/100);
        $tenth = floor($number - $hundred*100);
        $unit = floor($number - $hundred*100 - $tenth*10);
        foreach ($so1 as $key => $value4){
            if ($hundred == $key){
                echo $value4." hundred ";
            }
        }
        foreach ($so2 as $key => $value5){
            if ($tenth == $key && $tenth != 0){
                echo $value5. " ";
            }
        }
        foreach ($so1 as $key => $value){
            if ($unit == $key && $unit != 0){
                echo $value;
            }
        }
    }
}
?>
</body>
</html>