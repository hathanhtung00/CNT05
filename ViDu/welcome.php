<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chào mừng</title>
</head>
<body>
    <h1>Xin chào, <?php echo htmlspecialchars($user); ?>!</h1>
    <p>Bạn đã đăng nhập thành công.</p>
    <p><a href="logout.php">Đăng xuất</a></p>
</body>
</html>
