<?php

class CartModel
{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = []; 
        }
    }

    public function getItems(ProductModel $productModel): array
    {
        $items = [];

        foreach ($_SESSION['cart'] as $id => $qty) {
            $product = $productModel->getById($id);

            if ($product) {
                $product['qty'] = $qty;
                $product['total'] = $product['price'] * $qty;
                $items[] = $product;
            }
        }

        return $items;
    }

    public function add(int $id): void
    {
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]++;
        } else {
            $_SESSION['cart'][$id] = 1;
        }
    }

    public function decrease(int $id): void
    {
        if (!isset($_SESSION['cart'][$id])) return;

        $_SESSION['cart'][$id]--;

        if ($_SESSION['cart'][$id] <= 0) {
            unset($_SESSION['cart'][$id]);
        }
    }
    public function remove(int $id): void
    {
        unset($_SESSION['cart'][$id]);
    }

    public function clear(): void
    {
        $_SESSION['cart'] = [];
    }

    public function getTotal(ProductModel $productModel): ?int
    {
        $total = 0;

        foreach ($_SESSION['cart'] as $id => $qty) {
            $product = $productModel->getById($id);
            if ($product) {
                $total += $product['price'] * $qty;
            }
        }

        return $total;
    }



    public function buy(): void
    {
        $this->clear();
    }
}
