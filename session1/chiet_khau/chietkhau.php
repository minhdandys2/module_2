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
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $productDescription = $_POST['ProductDescription'];
    $listPrice = $_POST['ListPrice'];
    $discountPercent = $_POST['DiscountPercent'];
    $discountAmount = $listPrice * $discountPercent * 0.01;
    $discountPrice = $listPrice - $discountAmount;
    echo "Product Description: $productDescription";
    echo "<br>";
    echo "List Price: $listPrice";
    echo "<br>";
    echo "Discount Percent: $discountPercent";
    echo "<br>";
    echo "Discount Amount: $discountAmount";
    echo "<br>";
    echo "Discount Price: $discountPrice";
}
?>
</body>
</html>
