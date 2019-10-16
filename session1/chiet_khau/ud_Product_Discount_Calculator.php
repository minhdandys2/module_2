<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Discount Calculator</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form method="post" action="chietkhau.php">
    <table>
        <tr>
            <td>Product description:</td>
            <td><input type="text" name="productDescription"></td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td><input type="text" name="listPrice"></td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td><input type="text" name="discountPercent">%</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="calculate discount"></td>
        </tr>
    </table>
</body>
</html>
<?php

?>

