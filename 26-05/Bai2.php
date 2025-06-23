<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
    <form action="" method="post">
        Họ tên: <input type="text" name="fullname"><br>

        Password: <input type="password" name="password"><br>

        Đăng ký học: <input type="checkbox" name="check_html" value="HTML">HTML
        <input type="checkbox" name="check_css" value="CSS">CSS<br>
        
        Giới tính: <input type="radio" name="radio" value="Nam">Nam
        <input type="radio" name="radio" value="Nữ">Nữ<br>
        
        Thành phố: <select name="city" id="">
            <option value="Hà Nội">Hà Nội</option>
            <option value="Hà Nam">Hà Nam</option>
            <option value="Ninh Bình">Ninh Bình</option>
        </select> <br>
        Tin nhắn: <textarea name="message" id="" cols="30" rows="10"></textarea><br>
        
        <input type="submit" name="submit" value="Gửi">
    </form>
</body>
</html>