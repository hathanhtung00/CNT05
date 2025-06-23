<?php
session_start();
session_unset(); // Xoá tất cả biến session
session_destroy(); // Hủy session

// Xóa cookie nếu có
setcookie('user', '', time() - 3600, '/');

// Chuyển về trang đăng nhập
header('Location: login.php');
exit();
