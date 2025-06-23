<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÀI 3</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Đăng ký thành viên</h1>
    <form action="" method="post">
        Tên truy cập: <input type="text" name="fullname"><br>

        Mật khẩu: <input type="password" name="password"><br>
        Nhập lại mật khẩu: <input type="password" name="re_password"><br>

        Email: <input type="email" name="email"><br>

        Phái: <input type="radio" name="radio" value="Nam">Nam
        <input type="radio" name="radio" value="Nữ">Nữ<br>
        Sở thích: <input type="checkbox" name="check" value="Nhatla">Nhặt lá
        <input type="checkbox" name="check" value="Nghenhac">Nghe nhạc
        <input type="checkbox" name="check" value="Ngammua">Ngắm mưa<br>

        Nghề nghiệp: <select name="job" id="">
            <option value="Giao vien">Tự do</option>
            <option value="Lap trinh vien">Lập trình viên</option>
            <option value="Di tu">Đi tu</option>
        </select> <br>

        Giới thiệu bản thân: <br>
        <textarea name="message" id="" cols="30" rows="10"></textarea><br>

        <input type="submit" name="submit" value="Đăng ký">
        <input type="reset" name="reset" value="Làm lại"><br>
    </form>
</body>

</html>