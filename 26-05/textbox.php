<!DOCTYPE html>

<head>
    <title></title>
</head>

<body>
    <!-- form ĐN  -->
    <form action="" method="post">
        Họ tên : <input type="text" name="fullname"><br>
        Password : <input type="password" name="password"><br>
        Tuổi : <input type="number" name="age"><br>
        <input type="radio" name="radio" value="Nam">Nam<br>
        <input type="radio" name="radio" value="Nữ">Nữ<br>
        <input type="submit" name="submit" value="Lưu">
    </form>
    <?php
    //kiểm tra
    if (isset($_POST['fullname'])) {
        echo "fullname: " . $_POST['fullname'] . "<br>";
    }
    if (isset($_POST['password'])) {
        echo "Pass: " . $_POST['password'] . "<br>";
    }
    //kiểm tra họ tên
    $name = $_POST['fullname'];
    if (empty($name)) {
        echo 'Chưa nhập họ tên' . "<br>";
    } else {
        echo 'Họ tên: ' . $name . "<br>";
    }
    //tuổi
    if (is_numeric(value: $_POST['age'])) {
        echo "Tuổi : " . $_POST['age'] . "<br>";
    } else {
        echo "Tuổi là số" . "<br>";
    }
//giới tính
    if (isset($_POST['radio'])) {
        echo "Giới tính: " . $_POST['radio'] . "<br>";
    }
    ?>
    <!-- form ĐN -->
</body>

</html>