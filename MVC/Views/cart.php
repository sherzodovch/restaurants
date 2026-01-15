<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container my-4">
        <h2>Your Cart</h2>

        <?php if (empty($cart)): ?>
            <p>Cart is empty</p>
        <?php else: ?>
            <ul class="list-group">
                <?php foreach ($cart as $index => $item): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= htmlspecialchars($item) ?>
                        <a href="?page=cart&remove=<?= $index ?>" class="btn btn-danger btn-sm">Remove</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <a href="?page=menu" class="btn btn-secondary mt-3">Back</a>
    </div>

</body>

</html>