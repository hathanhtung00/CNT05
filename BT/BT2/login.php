<?php
session_start();
$username = $password = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];


    if ($username === "admin" && $password === "123456") {

        $_SESSION['username'] = $username;

        setcookie("username", $username, time() + 300);

        header("Location: welcome.php");
        exit();
    } else {
        $error = "Tên đăng nhập hoặc mật khẩu không đúng.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h2>Đăng nhập</h2>
    <form method="post" action="">
        Tên đăng nhập: <br>
        <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br>

        Mật khẩu: <br>
        <input type="password" name="password"><br>

        <input type="submit" value="Đăng nhập"><br>

        <span style="color: red;"><?php if (!empty($error)) {
                                        echo $error;
                                    } ?></span>
    </form>
</body>

</html>