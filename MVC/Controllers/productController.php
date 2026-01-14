<?php

require_once __DIR__ . '/../Models/productModel.php';
require_once __DIR__ . '/../Models/cartModel.php';
class ProductController
{
    // Mahsulotlar ro‘yxati
    public function index(): void
    {
        $productModel = new ProductModel();
        $products = $productModel->getAll();

        require_once __DIR__ . '/../Views/menu.php';
    }

    // Bitta mahsulot (ixtiyoriy)
    public function show(int $id): void
    {
        $productModel = new ProductModel();
        $product = $productModel->getById($id);

        require_once __DIR__ . '/../Views/menu.php';
    }
}