<?php 
//Bài 1: Viết hàm tính tổng hai số
function tinhtong($a,$b){
    return $a+$b;
}
echo "Tổng 5 + 6 là: " . tinhtong(5,6) ."<br>";
//Bài 2: Viết hàm kiểm tra số chẵn
function sochan($a){
    if($a%2==0){
        return "Số chẵn";
    } else {
        return "Số lẻ";
    }
}
echo "6 là: " .sochan(6)."<br>";

//Viết hàm tìm số lớn nhất trong mảng
function maxarr($arr){
    $max = $arr[0];
    foreach($arr as $value){
        if($value > $max){
            $max = $value;
        }
    }
    return $max;
}
echo "Số lớn nhất trong mảng là: " . maxarr([1,2,3,4,5,6,7,8,9]) . "<br>";
//Viết hàm in bảng cửu chương của một số
function bangcuuchuong($a){
    echo "Bảng cửu chương của " . $a .": <br>";
    
    for($i=1;$i<=10;$i++){
        echo "$a x $i = ".$a*$i."<br>";
    }
}
bangcuuchuong(5)."<br>";
//Viết hàm chuyển đổi độ C → độ F.
function doCF($C) {
    $F = ($C * 9/5) + 32;
    return $F;
}
echo "30 độ C tương đương với " . doCF(30) . " độ F.<br>";
//Bài 5: Viết hàm tính diện tích các hình (tròn, chữ nhật, tam giác).
function DTtron($r) {
    $dtt =  pi() * $r * $r;
    return $dtt;
}
echo "Diện tích tròn có bán kính 5 : ". DTtron(5) ."<br>";
function DTcn($dai, $rong) {
    $dtcn = $dai * $rong;
    return $dtcn;
}
echo "DT HCN CD 5 và CR 3 : " . DTcn(5, 3) . "<br>";
function DTtamgiac($a, $h) {
    $dttg = ($a * $h)/2;
    return $dttg;
}
echo "DT Tam giác đáy 5 chiều cao 6 : ". DTtamgiac(5,6) ."<br>";
?>