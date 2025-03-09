<?php
// manage_products.php
session_start();
include('db.php');

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $target = 'uploads/' . basename($image);
    
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $sql = "INSERT INTO products (name, description, price, image) VALUES ('$name', '$description', '$price', '$image')";
    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="post" enctype="multipart/form-data">
    Name: <input type="text" name="name" required><br>
    Description: <textarea name="description" required></textarea><br>
    Price: <input type="text" name="price" required><br>
    Image: <input type="file" name="image" required><br>
    <button type="submit">Add Product</button>
</form>
