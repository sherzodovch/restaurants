<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .product { border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; width: 300px; }
        .price { font-weight: bold; }
        button { padding: 5px 10px; cursor: pointer; }
    </style>
</head>
<body>

<h1>🍽 Menu</h1>

<?php if (!empty($products)): ?>
    <?php foreach ($products as $product): ?>
        <div class="product">
            <h3><?= htmlspecialchars($product['name']) ?></h3>
            <p class="price">Narxi: <?= $product['price'] ?> so‘m</p>

            <!-- Savatga qo‘shish: action POST orqali кетади -->
            <form method="post" action="index.php?page=cart">
                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                <button type="submit" name="action" value="add">Savatga qo‘shish</button>
            </form>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Mahsulotlar yo‘q.</p>
<?php endif; ?>

<br>
<a href="index.php?page=cart">🛒 Savatga o‘tish</a>

</body>
</html>
