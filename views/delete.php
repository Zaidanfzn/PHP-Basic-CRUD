<?php
include('../db/db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM bakery WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "ID parameter missing.";
}

$conn->close();
?>