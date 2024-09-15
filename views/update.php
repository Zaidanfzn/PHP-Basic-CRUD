<?php
include '../db/db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM bakery WHERE id=$id");
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-4 bg-white rounded shadow">
        <h1 class="text-3xl font-bold mb-5 text-center">Edit Produk Roti</h1>

        <form action="../controller/productController.php" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($product['id']) ?>">
            
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" class="p-2 border rounded w-full" required>
            </div>
            
            <div class="mb-4">
                <label for="taste" class="block text-gray-700">Taste</label>
                <input type="text" id="taste" name="taste" value="<?= htmlspecialchars($product['taste']) ?>" class="p-2 border rounded w-full" required>
            </div>
            
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price</label>
                <input type="number" id="price" name="price" step="0.01" value="<?= htmlspecialchars($product['price']) ?>" class="p-2 border rounded w-full" required>
            </div>
            
            <div class="mb-4">
                <label for="material" class="block text-gray-700">Material</label>
                <input type="text" id="material" name="material" value="<?= htmlspecialchars($product['material']) ?>" class="p-2 border rounded w-full" required>
            </div>
            
            <div class="mb-4">
                <label for="topping" class="block text-gray-700">Topping</label>
                <input type="text" id="topping" name="topping" value="<?= htmlspecialchars($product['topping']) ?>" class="p-2 border rounded w-full" required>
            </div>
            
            <div class="mb-4">
                <label for="expired" class="block text-gray-700">Expired Date</label>
                <input type="date" id="expired" name="expired" value="<?= date('Y-m-d', strtotime($product['expired'])) ?>" class="p-2 border rounded w-full" required>
            </div>
            
            <button type="submit" name="update" class="bg-blue-500 text-white p-2 rounded">Update Produk</button>
        </form>
    </div>
</body>
</html>