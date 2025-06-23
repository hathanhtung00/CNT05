<?php
setcookie("user_name","admin", time() +10,"/");
echo "Thiết lập cookie trong 10 giây";
?>
<!-- setcookie("user_name","admin", time() -10,"/"); xóa cookie -->