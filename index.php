<?php

require_once "products.php";
require_once "functions.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Information System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f6ff;
            margin: 0;
            padding: 40px;
            color: #333;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #3157a4;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }

        .total-box {
            background-color: #dce9ff;
            border-left: 6px solid #3157a4;
            padding: 18px 25px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .total-box h3 {
            margin: 0 0 8px 0;
            color: #3157a4;
        }

        .total {
            font-size: 25px;
            font-weight: bold;
            color: #1f4080;
        }

        .table-box {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #8B0000;
            color: white;
            padding: 13px;
            text-align: left;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f1f5ff;
        }

        .kategori {
            color: #3157a4;
            font-weight: bold;
        }

        .stok {
            font-weight: bold;
        }
        .stok-kritis {
          background-color: #ffe5e5;
        }

        .peringatan {
           color: #d62828;
            font-size: 12px;
            font-weight: bold;
            margin-left: 5px;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #777;
            font-size: 14px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Product Information System</h1>

    <p class="subtitle">
        Informasi Data Produk
    </p>

    <div class="total-box">
        <h3>Total Nilai Stok</h3>

        <div class="total">
            Rp<?= number_format(hitungTotalNilaiStok($products), 0, ',', '.') ?>
        </div>
    </div>

    <div class="table-box">

        <table>

            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>

            <?php foreach ($products as $product): ?>

    <tr class="<?= $product["stok"] < 3 ? 'stok-kritis' : '' ?>">
        <td><?= $product["id"] ?></td>
        <td><?= $product["nama"] ?></td>

        <td class="kategori">
            <?= $product["kategori"] ?>
        </td>

        <td>
            Rp<?= number_format($product["harga"], 0, ',', '.') ?>
        </td>

        <td class="stok">
            <?= $product["stok"] ?>

            <?php if ($product["stok"] < 3): ?>
                <span class="peringatan">Stok Kritis</span>
            <?php endif; ?>
        </td>

        <td>
            <?= $product["deskripsi"] ?>
        </td>
    </tr>

<?php endforeach; ?>

        </table>

    </div>

    

</div>

</body>
</html>