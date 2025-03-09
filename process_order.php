<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $payment = $_POST['payment'];

    // Here, you would normally save the order to the database
    // For now, let's simulate an order confirmation page

    echo "<h1>Thank you for your order, $name!</h1>";
    echo "<p>Email: $email</p>";
    echo "<p>Shipping Address: $address</p>";
    echo "<p>Payment Method: $payment</p>";

    // Clear cart after order
    unset($_SESSION['cart']);
}
?>
