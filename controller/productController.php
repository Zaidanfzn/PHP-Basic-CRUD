<?php
include '../db/db.php';

if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $taste = $_POST['taste'];
    $price = $_POST['price'];
    $material = $_POST['material'];
    $topping = $_POST['topping'];
    $expired = $_POST['expired'];

    $sql = "INSERT INTO bakery (name, taste, price, material, topping, expired) 
            VALUES ('$name', '$taste', '$price', '$material', '$topping', '$expired')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/index.php?success=Produk berhasil ditambahkan");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $taste = $_POST['taste'];
    $price = $_POST['price'];
    $material = $_POST['material'];
    $topping = $_POST['topping'];
    $expired = $_POST['expired'];

    $sql = "UPDATE bakery SET name='$name', taste='$taste', price='$price', material='$material', topping='$topping', expired='$expired' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/index.php?success=Produk berhasil diupdate");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM bakery WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/index.php?success=Produk berhasil dihapus");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

function fetchProducts() {
    global $conn;
    $sql = "SELECT * FROM bakery";
    $result = $conn->query($sql);

    return $result;
}
?>