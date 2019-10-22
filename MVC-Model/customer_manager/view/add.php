<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add customer</title>
</head>
<body>
<div class="col-12">
    <h1>Thêm mới khách hàng</h1>
</div>
<div class="col-12">
    <form action="../Controller/CustomerController.php" method="post">
        <div class="form-group">
            <label>Tên khách hàng</label>
            <input type="text" class="form-control" name="name" placeholder="Nhập tên" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Nhập mail" required>
        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
    </form>
</div>
</body>
</html>