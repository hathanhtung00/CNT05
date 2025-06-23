<?php
session_start();
$_SESSION["user_name"] = "admin";
echo $_SESSION["user_name"];

unset($_SESSION["user_name"]);
session_destroy();
?>