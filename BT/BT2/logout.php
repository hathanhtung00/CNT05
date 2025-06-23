<?php
session_start();
session_unset();
session_destroy();

setcookie("username", "", time() - 300);

header("Location: login.php");
exit();
