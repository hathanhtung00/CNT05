<?php
session_start();
session_unset();
session_destroy();

// Xóa cookie
setcookie("username", "", time() - 3600);

header("Location: login.php");
exit();
