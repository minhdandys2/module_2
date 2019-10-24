<h2>Danh sách khách hàng</h2>
<a href="index.php?page=add">Thêm mới</a>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Email</th>
        <th>Adress</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $key => $customer): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $customer->name ?></td>
            <td><?php echo $customer->email ?></td>
            <td><?php echo $customer->address ?></td>
            <td><a href="index.php?page=delete&id=<?php echo $customer->id; ?>">Delete</a></td>
            <td><a href="index.php?page=edit&id=<?php echo $customer->id; ?>">Update</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>