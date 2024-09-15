<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5 text-center">Tambah Produk Roti</h1>

        <form action="../controller/productController.php" method="POST" class="mb-5">
            <div class="grid grid-cols-2 gap-4">
                <input type="text" name="name" placeholder="Nama Roti" class="p-2 border rounded" required>
                <input type="text" name="taste" placeholder="Rasa Roti" class="p-2 border rounded" required>
                <input type="number" step="0.01" name="price" placeholder="Harga" class="p-2 border rounded" required>
                <input type="text" name="material" placeholder="Bahan" class="p-2 border rounded" required>
                <input type="text" name="topping" placeholder="Topping" class="p-2 border rounded" required>
                <input type="date" name="expired" class="p-2 border rounded" required>
            </div>
            <button type="submit" name="create" class="mt-4 bg-blue-500 text-white p-2 rounded">Tambah Produk</button>
        </form>
    </div>
</body>
</html>