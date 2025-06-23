<?php
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'] ?? 'Khách';
$role = $_SESSION['role'] ?? '';
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>

<body>
    <div class="dashboard-container">
        <h1>Chào mừng, <?php echo htmlspecialchars($username); ?>!</h1>
        <?php if ($role == 'admin'): ?>
            <p>Chào admin, bạn có toàn quyền hệ thống.</p>
        <?php elseif ($role == 'user'): ?>
            <p>Chào người dùng, bạn chỉ có quyền xem.</p>
        <?php endif; ?>

        <div class="logout-link">
            <a href="logout.php">Đăng xuất</a>
        </div>
    </div>
</body>

</html>