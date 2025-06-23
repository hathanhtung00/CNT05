<h2>Cập nhật sản phẩm</h2>
<form method="post" action="index.php?action=update">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    Tên: <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>"><br>
    Giá: <input type="number" name="price" value="<?= htmlspecialchars($product['price']) ?>"><br>
    <button type="submit">Cập nhật</button>
    <a href="index.php?controller=product&action=index"><button type="button">Quay lại</button></a>
</form>
