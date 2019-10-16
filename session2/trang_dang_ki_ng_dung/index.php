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
    function loadRegistrations($filename){
        $jsondata = file_get_contents($filename);
        $arr_data = json_decode($jsondata,true);
        return $arr_data;
    }

    function saveDataJson($filename,$name,$email,$phone){
        try {
            $contact = [
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
            ];

            $arr_data = loadRegistrations($filename);
            array_push($arr_data,$contact);
            $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
            file_put_contents($filename, $jsondata);
            echo "Lưu dữ liệu thành công!";
        } catch (Exception $e) {
            echo 'Lỗi: ', $e->getMessage(), "\n";
        }
    }
    $email = NULL;
    $name = NULL;
    $phone = NULL;
    $emailerror = NULL;
    $nameerror = NULL;
    $phoneerror = NULL;

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $has_error = false;
        if (empty($name)) {
            $nameerror = "Ten dang nhap khong duoc de trong!";
            $has_error = true;
        }
        if (empty($email)) {
            $emailerror = "Email khong duoc de trong!";
            $has_error = true;
        }else {
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailerror = "Dinh dang email sai!";
                $has_error = true;
            }
        }
        if (empty($phone)){
            $phoneerror = "So dien thoai khong duoc de trong!";
            $has_error = true;
        }
        if ($has_error === false) {
            saveDataJson("users.json", $name, $email, $phone);
            $name = NULL;
            $email = NULL;
            $phone = NULL;
        }
    }
?>
    <h1>Registration Form</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Details</legend>
            <table>
                <tr>
                    <td> Name: </td>
                    <td><input type="text"  name="name" value="<?php echo $name ?>"></td>
                    <td><p style="color: red">*<?php echo $nameerror ?></p></td>
                </tr>
                <tr>
                    <td> E-mail: </td>
                    <td><input type="text" name="email" value="<?php echo $email ?>"></td>
                    <td><p style="color: red">* <?php echo $emailerror ?></p></td>
                </tr>
                <tr>
                    <td> Phone: </td>
                    <td><input type="text" name="phone" value="<?php echo $phone ?>"></td>
                    <td><p style="color: red">*<?php echo $phoneerror ?></p></td>
                </tr>
                <tr>
                    <td colspan="2"> <input type="submit" value="Register"></td>
                </tr>
                <tr>
                    <td colspan="2"><p style="color: red">* required field.</p></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
        $registrations = loadRigistration("users.json");
    ?>
    <h2>Registration list</h2>
    <table width="100%" style="text-align: center">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($registrations as $registration): ?>
            <tr>
                <td><?= $registration['name']; ?></td>
                <td><?= $registration['email']; ?></td>
                <td><?= $registration['phone']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
