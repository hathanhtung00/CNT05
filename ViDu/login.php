<?php
$user = $email = $pass = $repass = "";
$err = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $user= $_POST['user'];
    $pass= $_POST['pass'];
    $email= $_POST['email'];
    $repass= $_POST['repass'];
}
    if (empty($user)) {
        $err = "Họ tên không được để trống.";
    } elseif (strlen($user) < 3) {
        $err = "Họ tên phải có ít nhất 3 ký tự.";
    }

    if (empty($email)) {
        $err = "Email không được để trống.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err = "Email không đúng định dạng.";
    }

    if (empty($pass)) {
        $err = "Mật khẩu không được để trống.";
    } elseif (strlen($pass) < 6) {
        $err = "Mật khẩu phải có ít nhất 6 ký tự.";
    }

    if (empty($repass)) {
        $err = "Vui lòng xác nhận mật khẩu.";
    } elseif ($repass !== $pass) {
        $err = "Mật khẩu xác nhận không khớp.";
    }

    if (empty($err)) {
        $err = "Đăng ký thành công!";

    }
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Ký Tài Khoản</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Đăng Ký Tài Khoản</h2>
        <form action="" method="POST">
            <label for="">Họ tên:</label>
            <input type="text" id="user" name="user" value="<?= htmlspecialchars($user) ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>

            <label for="">Mật khẩu:</label>
            <input type="password" id="pass" name="pass" required>

            <label for="">Xác nhận mật khẩu:</label>
            <input type="password" id="repass" name="repass" required>

            <button type="submit">Đăng Ký</button>
        </form>
        <?php if(!empty($err)){echo "<p>$err</p>";} ?>
    </div>
</body>
</html>