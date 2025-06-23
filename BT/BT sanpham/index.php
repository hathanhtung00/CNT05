<?php
require_once "Database.php";

$db = new Database();
$conn = $db->connect();

$sql = "SELECT 
            p.id,
            p.name AS product_name,
            p.price,
            c.name AS category_name,
            u.name AS user_name,
            p.created_at
        FROM products p
        JOIN categories c ON p.category_id = c.id
        JOIN users u ON p.user_id = u.id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <style>
        th,
        td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Danh sách sản phẩm</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Danh mục</th>
            <th>Người tạo</th>
            <th>Ngày tạo</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['product_name'] ?></td>
                <td><?= $product['price'] ?> VND</td>
                <td><?= $product['category_name'] ?></td>
                <td><?= $product['user_name'] ?></td>
                <td><?= $product['created_at'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>