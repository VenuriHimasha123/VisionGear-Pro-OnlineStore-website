<?php
// delete_product.php
session_start();
include('db.php');

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

$id = $_GET['id'];
$sql = "DELETE FROM products WHERE product_id = $id";
if ($conn->query($sql) === TRUE) {
    echo "Product deleted successfully!";
    header('Location: admin_dashboard.php');
} else {
    echo "Error: " . $conn->error;
}
?>
