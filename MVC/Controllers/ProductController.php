<?php
require_once 'Models/ProductModel.php';

class ProductController {
    public function index() {
        global $pdo;
        $model = new ProductModel($pdo);
        $products = $model->all();
        require 'Views/menu.php';
    }
}
