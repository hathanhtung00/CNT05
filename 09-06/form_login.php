<?php
session_start();


if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'] ?? '';
    $password = $_POST['pass'] ?? '';

    if ($username === 'admin' && $password === '123') {
        $_SESSION['user'] = $username;

        setcookie('user', $username, time() + 300, '/');

        header("Location: welcome.php");
        exit();
    }
    if (empty($_POST['username'])) {
        $error = "không trống tên";
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['password'])) {
        $error = "không trống pass";
    } else {
        $password = $_POST['password'];
    }
    if (empty($_POST['username'])||empty($_POST['password'])) {
        $error = "không trống tên và pass";
    }
    if (empty($error)) {
        $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h1>Đăng nhập</h1>
    <?php if (isset($error)) echo "$error" ?>
    <form action="" method="post">
        Tên đăng nhập: <input type="text" name="username"><br>
        Mật khẩu: <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Đăng nhập">
</body>

</html>