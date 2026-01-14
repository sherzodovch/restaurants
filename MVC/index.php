<?php
// Сессия (нужна для корзины)
session_start();

// ===== Подключаем модели =====
require_once __DIR__ . '/Models/ProductModel.php';
require_once __DIR__ . '/Models/CartModel.php';

// ===== Подключаем контроллеры =====
require_once __DIR__ . '/Controllers/ProductController.php';
require_once __DIR__ . '/Controllers/CartController.php';

// ===== Простой роутинг =====
$page = $_GET['page'] ?? 'menu';

switch ($page) {
    case 'cart':
        $controller = new CartController();
        $controller->index();
        break;

    case 'menu':
    default:
        $controller = new ProductController();
        $controller->index();
        break;
}
