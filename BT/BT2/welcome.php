<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Chào mừng</title>
</head>

<body>
    <h2>Xin chào, <?php echo htmlspecialchars($username); ?>!</h2>

    <?php
    if (isset($_COOKIE['username'])) {
        echo "<p>Chào mừng trở lại, " . htmlspecialchars($_COOKIE['username']) . "!</p>";
    }
    ?>

    <form action="logout.php" method="post">
        <input type="submit" value="Đăng xuất">
    </form>
</body>

</html>