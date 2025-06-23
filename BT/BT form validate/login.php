<?php
$username = $password = "";
$usernameErr = $passwordErr = $loginErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        $usernameErr = "Tên đăng nhập không được để trống!";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Mật khẩu không được để trống!";
    } elseif (strlen($_POST["password"]) < 6) {
        $passwordErr = "Mật khẩu phải có ít nhất 6 ký tự!";
    } else {
        $password = $_POST["password"];
    }

    if (empty($usernameErr) && empty($passwordErr)) {
        if ($username === "admin" && $password === "123456") {
            header("Location: welcome.php");
            exit();
        } else {
            $loginErr = "Sai tài khoản hoặc mật khẩu!";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <h2>Form Đăng nhập</h2>
    <form method="post" action="">
        Tên đăng nhập: <br>
        <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
        <span class="error"><?php echo $usernameErr; ?></span><br>

        Mật khẩu: <br>
        <input type="password" name="password">
        <span class="error"><?php echo $passwordErr; ?></span><br>

        <input type="submit" value="Đăng nhập"><br>

        <span class="error"><?php echo $loginErr; ?></span>
    </form>
</body>

</html>