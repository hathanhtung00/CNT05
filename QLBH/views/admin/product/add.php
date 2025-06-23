<h2>Thêm sản phẩm mới</h2>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    h2 {
        color: #000000;
        text-align: left;
        margin: 10px auto;
        text-transform: uppercase;
    }

    form {
        margin-top: 20px;
        padding: 20px;
        border-radius: 8px;
        margin: auto;
        display: block;
        font-size: 16px;
    }

    input[type="text"],
    input[type="number"] {
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: rgb(255, 0, 0);
        color: white;
        border-radius: 4px;
        padding: 8px;
        border: none;
        margin-top: 20px
    }
</style>
<link rel="stylesheet" href="../public/css/add.css">
<form method="post" action="admin.php?controller=product&action=store" enctype="multipart/form-data">
    Ảnh: <input type="file" name="image"><br>
    Tên: <input type="text" name="name" required><br>
    Giá: <input type="number" name="price" required><br>
    Ghi chú: <textarea name="description"></textarea><br>
    <button type="submit">Lưu</button>
    <a href="admin.php?controller=product&action=index"><button>Quay lại</button></a>
</form>