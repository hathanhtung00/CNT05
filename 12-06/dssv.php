<!DOCTYPE html>
<html lang="en">

<?php
$message = "";
$a = "";
$str = "";
if (isset($_POST["btnGui"])) {
    $a = $_POST["txtTen"];
    $mang_ten = explode(",", $a);
    $str = $_POST["txtTimKiem"];
    $tk = false;

    foreach ($mang_ten as $ten) {
        if ($ten === $str) {
            $message = $str." có trong danh sách";
            $tk = true;
            break;
        }
    }
    if (!$tk) {
        $message = $str." không có trong danh sách";
    }
    if (empty($a) || empty($str)) {
        $message = "";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Danh sách sinh viên</h1>
    <form method="post">
        <label for="txtTen">Nhập tên sinh viên:</label>
        <input type="text" name="txtTen" id="txtTen" value="<?php echo htmlspecialchars($a); ?>" placeholder="Nhập tên sinh viên">
        <br>
        <label for="txtTimKiem">Tìm kiếm:</label>
        <input type="text" name="txtTimKiem" id="txtTimKiem" value="<?php echo htmlspecialchars($str); ?>" placeholder="Nhập tên tìm kiếm" style="width: 150px;">
        <br>
        <label for="txtHienthi">Có trong danh sách không :</label>
        <input type="text" name="txtHienthi" id="txtHienthi" value="<?php echo $message; ?>" readonly>
        <br>
        <button type="submit" name="btnGui">Gửi</button>
    </form>
</body>

</html>