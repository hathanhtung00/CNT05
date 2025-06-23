<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: login.php');
    exit();
}
$user=$_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>chúc mừng bạn đăng nhập thành công</h1>
    <p><a href="logout.php"> Đăng xuất</a></p>
</body>
</html>