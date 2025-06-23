<?php
$arr = [1, 2, 3, 5, 4, 19, 5, 7, 15, 21];
echo "Mảng ban đầu: " . implode(', ', $arr) . "<br>";

// Bài 1: Tính tổng các phần tử trong mảng
$sum = array_sum($arr);
echo "Tổng: " .$sum."<br>";

// Bài 2: Tìm phần tử lớn nhất / nhỏ nhất trong mảng
$max = max($arr);
$min = min($arr);
echo "Lớn nhất: ".$max. "<br>";
echo "Nhỏ nhất: ".$min. "<br>";

// Bài 3: Đếm số phần tử chẵn và lẻ trong mảng
$chan = $le = 0;
foreach ($arr as $value) {
    if ($value % 2 == 0) {
        $chan++;
    } else {
        $le++;
    }
}
echo "Số chẵn: ".$chan. "<br>";
echo "Số lẻ: ".$le. "<br>";

// Bài 4: Sắp xếp mảng tăng dần / giảm dần
$arrtang = $arr;
sort($arrtang);
echo "Tăng dần: ";
foreach ($arrtang as $value) {
    echo $value . " ";
}
echo "<br>";

$arrgiam = $arr;
rsort($arrgiam);
echo "Giảm dần: ";
foreach ($arrgiam as $value) {
    echo $value . " ";
}
echo "<br>";

// Bài 5: Xóa phần tử trùng lặp trong mảng
$arrxoa = array_unique($arr);
echo "Mảng không trùng: ";
foreach ($arrxoa as $value) {
    echo $value . " ";
}
echo "<br>";

// Bài 6: Đảo ngược mảng
$arrdao = array_reverse($arr);
echo "Mảng đảo ngược: ";
foreach ($arrdao as $value) {
    echo $value . " ";
}
echo "<br>";

// Bài 7: Kiểm tra 21 có tồn tại trong mảng không
$exists = in_array(21, $arr);
if ($exists) {
    echo "21 có tồn tại trong mảng<br>";
} else {
    echo "21 không tồn tại trong mảng<br>";
}


// Bài 8: Gộp 2 mảng lại với nhau
$arr1 = [1, 2];
$arr2 = [3, 4];
$merged = array_merge($arr1, $arr2);
echo "Mảng gộp: ";
foreach ($merged as $value) {
    echo $value . " ";
}
echo "<br>";

// Bài 9: Tìm phần tử xuất hiện nhiều nhất trong mảng
$counts = array_count_values($arr);
$maxCount = max($counts);
$mostFrequent = array_keys($counts, $maxCount);
echo "Phần tử xuất hiện nhiều nhất: ";
foreach ($mostFrequent as $value) {
    echo $value . " ";
}
echo "($maxCount lần)<br>";

// Bài 10: Chuyển chuỗi thành mảng và ngược lại
$str = "1,2,3,4,5";
$strToArray = explode(',', $str);
echo "Chuỗi thành mảng: <br>";
print_r($strToArray);

echo "<br>Mảng thành chuỗi: ";
foreach ($arr as $value) {
    echo $value . ",";
}
echo "<br>";
?>
