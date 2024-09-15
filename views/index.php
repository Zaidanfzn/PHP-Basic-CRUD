<?php
include '../controller/productController.php';
$products = fetchProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Roti Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5 text-center">Toko Roti Sederhana</h1>

        <a href="create.php" class="bg-green-500 text-white p-2 rounded mb-5 inline-block">Tambah Produk</a>

        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2">Nama</th>
                    <th class="py-2">Rasa</th>
                    <th class="py-2">Harga</th>
                    <th class="py-2">Bahan</th>
                    <th class="py-2">Topping</th>
                    <th class="py-2">Kedaluwarsa</th>
                    <th class="py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $products->fetch_assoc()): ?>
                    <tr>
                        <td class="py-2"><?= $row['name'] ?></td>
                        <td class="py-2"><?= $row['taste'] ?></td>
                        <td class="py-2"><?= $row['price'] ?></td>
                        <td class="py-2"><?= $row['material'] ?></td>
                        <td class="py-2"><?= $row['topping'] ?></td>
                        <td class="py-2"><?= $row['expired'] ?></td>
                        <td class="py-2">
                            <a href="update.php?id=<?= $row['id'] ?>" class="bg-yellow-500 text-white p-1 rounded">Edit</a>
                            <a href="../controller/productController.php?delete=<?= $row['id'] ?>" class="bg-red-500 text-white p-1 rounded">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>