<?php
class ProductModel {
    private $db;
    public function __construct($pdo) {
        $this->db = $pdo;
    }
    public function all() {
        return $this->db->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
    }
}
