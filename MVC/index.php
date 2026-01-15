<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();
require_once 'config.php';

$page = $_GET['page'] ?? 'menu';

require_once 'Controllers/ProductController.php';
require_once 'Controllers/CartController.php';

if ($page === 'cart') {
    (new CartController())->index();
} else {
    (new ProductController())->index();
}
