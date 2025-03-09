<?php
// admin_dashboard.php
session_start();
include('db.php');

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

$sql = "SELECT * FROM products";
$products = $conn->query($sql);
?>
<h1>Admin Dashboard</h1>
<a href="manage_products.php">Manage Products</a><br>
<a href="manage_orders.php">Manage Orders</a><br>

<h2>Products</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <?php while ($product = $products->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td>
                <a href="edit_product.php?id=<?php echo $product['product_id']; ?>">Edit</a>
                <a href="delete_product.php?id=<?php echo $product['product_id']; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
