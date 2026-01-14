<?php

class CartController
{
    public function index()
    {
        $productModel = new ProductModel();
        $cartModel = new CartModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_POST['action'] ?? '';
            $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;

            if ($action === 'add' && $id > 0) {
                $cartModel->add($id);
            }

            if ($action === 'minus' && $id > 0) {
                $cartModel->decrease($id);
            }

            if ($action === 'remove' && $id > 0) {
                $cartModel->remove($id);
            }

            if ($action === 'clear') {
                $cartModel->clear();
            }

            if ($action === 'buy') {
                $cartModel->buy();
            }

            header("Location: index.php?page=cart");
            exit;
        }

        $items = $cartModel->getItems($productModel);
        $total = $cartModel->getTotal($productModel);

        require "/..Views/cart.php";
    }
}
