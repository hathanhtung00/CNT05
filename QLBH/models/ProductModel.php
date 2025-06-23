<?php
require_once __DIR__ . '/../config/database.php';
//Khởi tạo đối tượng ProductModel
class ProductModel
{
    //Khởi tạo thuộc tính
    private $pdo;
    //Phương thức khởi tạo mặc định
    public function __construct()
    {
        $this->pdo = Database::connect();
    }
    //Phương thức hiển thị tất cả sản phẩm
    public function getAll()
    {
        return $this
            ->pdo
            ->query("SELECT * FROM products")
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name, $price, $description, $image)
    {
        $stmt = $this->pdo->prepare("INSERT INTO products (name, price, description, image) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$name, $price, $description, $image]);
    }

    public function delete($id)
    {

        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

        public function getById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


}
