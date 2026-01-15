<?php
class CartController {
    public function index() {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_GET['add'])) {
            $_SESSION['cart'][] = $_GET['add'];
            header("Location: ?page=cart");
            exit;
        }

        if (isset($_GET['remove'])) {
            $key = $_GET['remove'];
            if (isset($_SESSION['cart'][$key])) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
            }
            header("Location: ?page=cart");
            exit;
        }

        $cart = $_SESSION['cart'];
        require 'Views/cart.php';
    }
}
