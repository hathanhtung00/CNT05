<?php
session_start();

if(isset($_SESSION['user'])){
header('Location: welcome.php');
exit();
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    if($user=== 'admin'&& $pass=== '123'){
        $_SESSION['user']=$user;
        setcookie('user',$user,time()+ 0*24*0);
        header('Location: welcome.php');
        exit();
    } else{
        $err='sai TK , MK';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ĐĂNG NHẬP</h1>
    <?php if(!empty($err)) echo "<p> $err </p>";  ?>
    <form action="" method="post">
Tên TK: <input type="text" name="user"><br>
MK: <input type="password" name="pass"><br>
<input type="submit" value="Đăng nhập">
    </form>
    
</body>
</html>