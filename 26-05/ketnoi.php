<?php
function tinhtien($so_km)
{
    $tong_tien = 0;
    if ($so_km <= 0) {
        echo "Số km không hợp lệ.";
        return;
    }
    if ($so_km <= 1) {
        $tong_tien = 15000;
    } elseif ($so_km <= 5) {
        $tong_tien = 15000 + ($so_km - 1) * 12000;
    } else {
        $tong_tien = 15000 + 4 * 12000 + ($so_km - 5) * 9000;
    }
    if ($so_km > 140) {
        $tong_tien *= 0.88;
    }
    echo "Số km: 150<br>";
    echo "Tổng tiền taxi: " . $tong_tien . " đ";
}
tinhtien(150);
?>