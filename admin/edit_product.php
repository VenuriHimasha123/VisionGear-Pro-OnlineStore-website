<?php
// edit_product.php
session_start();
include('db.php');

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE product_id = $id";
$product = $conn->query($sql)->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if ($_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
        $target = 'uploads/' . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $sql = "UPDATE products SET name='$name', description='$description', price='$price', image='$image' WHERE product_id=$id";
    } else {
        $sql = "UPDATE products SET name='$name', description='$description', price='$price' WHERE product_id=$id";
    }
    if ($conn->query($sql) === TRUE) {
        echo "Product updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="post" enctype="multipart/form-data">
    Name: <input type="text" name="name" value="<?php echo $product['name']; ?>" required><br>
    Description: <textarea name="description" required><?php echo $product['description']; ?></textarea><br>
    Price: <input type="text" name="price" value="<?php echo $product['price']; ?>" required><br>
    Image: <input type="file" name="image"><br>
    <button type="submit">Update Product</button>
</form>
