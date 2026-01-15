<?php
class ProductModel
{
    private $db;
    public function __construct($pdo)
    {
        $this->db = $pdo;
    }
    public function all()
    {
        return $this->db->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getById(int $id): ?array
    {
        // Example implementation assuming a PDO database connection in $this->db
        $stmt = $this->db->prepare("SELECT id, name, price FROM products WHERE id = ?");
        $stmt->execute([$id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        return $product ?: null;
    }
}