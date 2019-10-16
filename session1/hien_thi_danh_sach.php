<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>danh sach khach hang</title>
    <style>
        table,tr,th,td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h2 style="text-align: center">Danh sach sach khach hang</h2>
<table width="100%" style="text-align: left;">
    <tr>
        <th>STT</th>
        <th>Ten</th>
        <th>Ngay sinh</th>
        <th>Dia chi</th>
        <th>Anh</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("ten" => "Pham Huu Minh",
            "ngaysinh" => "15-06-2001",
            "diachi" => "Nghe an",
            "anh" => "tom.jpg"),
        "2" => array("ten" => "Nguyễn Văn Nam",
            "ngaysinh" => "14-12-2001",
            "diachi" => "Nghe An",
            "anh" => "tom.jpg"),
        "3" => array("ten" => "Nguyễn Thái Hòa",
            "ngaysinh" => "25-05-2000",
            "diachi" => "Nam Định",
            "anh" => "tom.jpg"),
        "4" => array("ten" => "Trần Ngoc Duong",
            "ngaysinh" => "22-08-1992",
            "diachi" => "Nghe An",
            "anh" => "tom.jpg"),
        "5" => array("ten" => "Nguyễn Đình Thi",
            "ngaysinh" => "23-10-1995",
            "diachi" => "Hà Nội",
            "anh" => "tom.jpg")
    );

    foreach($customerlist as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngaysinh']."</td>";
        echo "<td>".$values['diachi']."</td>";
        echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
