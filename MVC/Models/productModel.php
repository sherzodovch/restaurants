<?php

class ProductModel
{
    private array $products = [
        [
            'id' => 1,
            'name' => 'Burger',
            'price' => 25000
        ],
        [
            'id' => 2,
            'name' => 'Pizza',
            'price' => 60000
        ],
        [
            'id' => 3,
            'name' => 'Lavash',
            'price' => 30000
        ]
    ];

    // barcha mahsulotlarni olish
    public function getAll(): array
    {
        return $this->products;
    }

    // bitta mahsulotni ID orqali olish
    public function getById(int $id): ?array
    {
        foreach ($this->products as $product) {
            if ($product['id'] === $id) {
                return $product;
            }
        }
        return null;
    }
}
