<?php
// var_dump($products);
$obstart = ob_start();
?>
<h2>Danh sách sản phẩm</h2>
<link rel="stylesheet" href="../public/css/list.css">
<div>
    <a href="./admin.php?controller=product&action=add" class="ws-btn mb-2">Thêm mới</a>
</div>
<table class="my_table">
    <tr>
        <th>ID</th>
        <th>Hình ảnh</th>
        <th>Tên</th>
        <th>Giá</th>
        <th>Mô tả</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($products as $sp): ?>
        <tr>
            <td><?= $sp['id'] ?></td>
            <td><img class="avatar" src="<?= $sp['image'] ?>" alt="" style="width: 80px; height: 80px; object-fit: cover;"></td>
            <td><?= $sp['name'] ?></td>
            <td><?= $sp['price'] ?></td>
            <td><?= $sp['description'] ?></td>
            <td>
                <a class="ws-btn" href="index.php?controller=product&action=edit&id=<?= $sp['id'] ?>">Sửa</a>
                <a class="ws-btn" href="index.php?controller=product&action=delete&id=<?= $sp['id'] ?>" onclick="return confirm('Xóa?')">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
// include './../views/admin/layout.php';
?>