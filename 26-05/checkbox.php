<!DOCTYPE html>

<head>
    <title></title>
</head>

<body>
    <!-- checkbox -->
    <form action="" method="post">
        <h1>Đăng ký môn học</h1><br>
        <input type="checkbox" name="check_html" value="HTML">HTML<br>
        <input type="checkbox" name="check_css" value="CSS">CSS<br>
        <input type="submit" name="submit" value="Đăng ký">
    </form>
    <?php
    if (isset($_POST['check_html'])) {
        echo $_POST['check_html'] . "<br>";
    }
    if (isset($_POST['check_css'])) {
        echo $_POST['check_css'] . "<br>";
    }
    if (isset($_POST['check_html']) && isset($_POST['check_css'])) {
        echo "Chọn lại";
    }
    ?>
    <!-- select -->
    <form action="" method="post">
        Thành phố <br>
        <select name="city" id="">
            <option value="Hà Nội">Hà Nội</option>
            <option value="Hà Nam">Hà Nam</option>
            <option value="Ninh Bình">Ninh Bình</option>
        </select>
        Quốc gia <br>
        <select name="qg" id="">
            <option value="VN">VN</option>
            <option value="NA">NA</option>
            <option value="TQ">TQ</option>
        </select>
        <br><input type="submit" name="submit" value="Chọn">
    </form>
    <?php
    if (isset($_POST['city'])) {
        echo $_POST['city'] . '<br>';
    }
    if (isset($_POST['qg'])) {
        echo $_POST['qg'] . '<br>';
    }
    ?>
</body>

</html>