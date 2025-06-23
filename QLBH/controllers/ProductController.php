<?php
require_once "./../models/ProductModel.php";
class ProductController
{
    private $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }

    public function index()
    {
        $products = $this->model->getAll();
        include "./../views/admin/product/list.php";
    }


 // Hiển thị form thêm sản phẩm
    public function add()
    {
        include "./../views/admin/product/add.php";
    }

//Thêm mới sản phẩm
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $image = $_FILES['image']['name'];
            $this->model->create($name, $price, $description, $image);
            header("Location: admin.php?controller=product&action=index");
        }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->model->delete($id);
            header("Location: admin.php?controller=product&action=index");
        }
    }

    public function edit()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $product = $this->model->getById($id);
            include "./../views/admin/product/edit.php";
        }
    }
}
