<h2>Savat</h2>

<?php if (empty($items)): ?>
    <p>Savat bo‘sh</p>
    <a href="index.php">← Menyuga qaytish</a>

<?php else: ?>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nomi</th>
            <th>Narxi</th>
            <th>Soni</th>
            <th>Jami</th>
            <th>Amallar</th>
        </tr>

        <?php foreach ($items as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['name']) ?></td>
                <td><?= $item['price'] ?> so‘m</td>
                <td><?= $item['qty'] ?></td>
                <td><?= $item['total'] ?> so‘m</td>
                <td>
                    <!-- Qo‘shish -->
                    <form method="post" action="index.php?page=cart" style="display:inline">
                        <input type="hidden" name="id" value="<?= $item['id'] ?>">
                        <button type="submit" name="action" value="add">+</button>
                    </form>

                    <!-- Ayirish -->
                    <form method="post" action="index.php?page=cart" style="display:inline">
                        <input type="hidden" name="id" value="<?= $item['id'] ?>">
                        <button type="submit" name="action" value="minus">-</button>
                    </form>

                    <!-- O‘chirish -->
                    <form method="post" action="index.php?page=cart" style="display:inline">
                        <input type="hidden" name="id" value="<?= $item['id'] ?>">
                        <button type="submit" name="action" value="remove">O‘chirish</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>

    <p><b>Jami summa:</b> <?= $total ?> so‘m</p>

    <form method="post" action="index.php?page=cart" style="display:inline">
        <button type="submit" name="action" value="clear">Savatni tozalash</button>
    </form>

    <form method="post" action="index.php?page=cart" style="display:inline">
        <button type="submit" name="action" value="buy">Sotib olish</button>
    </form>

    <br><br>
    <a href="index.php">← Menyuga qaytish</a>

<?php endif; ?>