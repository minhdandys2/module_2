<!DOCTYPE html>
<html>
<head>
    <title>thoi gian</title>
</head>
<body>
<br>
<h3>Từ Điển Anh - Việt</h3>
<form method="post">
    <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
    <input type="submit" id="submit" value="Tìm"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    $flag = 0;
    $dictionary = array(
        "hello" => "xin chào",
        "how" => "thế nào",
        "book" => "quyển vở",
        "computer" => "máy tính");
    foreach ($dictionary as $word => $description) {
        if ($searchword == $word) {
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag += 1;
        }
    }
if ($flag == 0) {
    echo "Không tìm thấy từ cần tra.";
}
}
?>
</body>
</html>
