<?php
session_start();
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>
    
    <form action="process_order.php" method="POST">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="address">Shipping Address:</label>
        <textarea id="address" name="address" required></textarea>

        <label for="payment">Payment Method:</label>
        <select id="payment" name="payment">
            <option value="credit_card">Credit Card</option>
            <option value="paypal">PayPal</option>
        </select>

        <button type="submit">Place Order</button>
    </form>
</body>
</html>
