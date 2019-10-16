<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            border-radius: 10px;
            border: solid 1px #FF0000;
        }
    </style>
</head>
<body>
<form action="getValue.php" method="get">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td>Group</td>
            <td><input type="text" name="group"></td>
        </tr>
        <tr>
            <td><select name="role">
                    <option value="admin">Admin</option>
                    <option value="student" selected>Student</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit"></td>
        </tr>
    </table>
    <table width="100%" style="text-align: center">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Group</th>
            <th>Role</th>
        </tr>
        <?php
        include_once "managerStudent.php";
        $listStudent = $manager->readFileJsonToArray();
        foreach ($listStudent as $key => $value) {
            echo "<tr>";
            echo "<td>" . ($key+1) . "</td>";
            echo "<td>" . $value['name'] . "</td>";
            echo "<td>" . $value['phone'] . "</td>";
            echo "<td>" . $value['address'] . "</td>";
            echo "<td>" . $value['group'] . "</td>";
            echo "<td>" . $value['role'] . "</td>";
            echo "<td>" . "<a href='delete.php?id=" . $key . "'>Delete</a>" . "</td>";
            echo "<td>" . "<a href='edit.php?id=" . $key . "'>Edit</a>" . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</form>

</body>
</html>
