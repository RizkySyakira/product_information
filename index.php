<?php

require_once "products.php";
require_once "functions.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Information System</title>
</head>
<body>

    <h1>Product Information System</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
        </tr>

        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product["id"] ?></td>
                <td><?= $product["nama"] ?></td>
                <td><?= $product["kategori"] ?></td>
                <td>Rp<?= number_format($product["harga"], 0, ',', '.') ?></td>
                <td><?= $product["stok"] ?></td>
                <td><?= $product["deskripsi"] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

    <h3>
        Total Nilai Stok:
        Rp<?= number_format(hitungTotalNilaiStok($products), 0, ',', '.') ?>
    </h3>

</body>
</html>