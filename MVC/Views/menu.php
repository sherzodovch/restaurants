<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Restaurant</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="?page=menu">Restaurant</a>
<a class="btn btn-outline-light" href="?page=cart">Cart</a>
</div>
</nav>

<div class="container my-4">
<div class="row g-4">
<?php foreach($products as $p): ?>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="card h-100 shadow">
<div class="card-body d-flex flex-column">
<h5><?= htmlspecialchars($p['name']) ?></h5>
<p class="text-muted"><?= $p['price'] ?> so'm</p>
<a href="?page=cart&add=<?= urlencode($p['name']) ?>" class="btn btn-primary mt-auto">Add to cart</a>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>

</body>
</html>
