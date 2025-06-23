<?php
function tinhtong($a, $b)
{
    return $a + $b;
}
$a = 5;
$b = 6;
echo "Tổng của $a + $b là: " . tinhtong($a, $b)."<br>";

function sochan($a)
{
    if ($a % 2 == 0) {
        return "là số chẵn";
    }
    else {
        return "là số lẻ";
    }
} 
$a=7;
echo "$a là ".sochan($a)."<br>";

function somax($arr){
$max=$arr[0];
foreach($arr as $arr1){
    if ($max<$arr1) {
$max=$arr1;
}
}
return $max;
}
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9]; 
echo "Max mảng là: " . somax($arr)."<br>";

function bangcuuchuong($a){
    echo "Bảng nhân $a: <br>";
    for ($i= 1; $i<=10; $i++) {
       $kq=$a*$i;
        echo "$a x $i = $kq"."<br>";
}
}
$a=8;
bangcuuchuong($a);