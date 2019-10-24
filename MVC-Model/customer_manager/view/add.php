<?php
namespace view;

if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="col-12">
    <h1>Thêm mới khách hàng</h1>
</div>
<div class="col-12">
    <form method="post">
        <table>
            <tr>
                <td> Tên khách hàng</td>
                <td><input type="text" class="form-control" name="name" placeholder="Nhập tên" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" class="form-control" name="email" placeholder="Nhập mail" required></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ" required></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
    </form>
</div>
