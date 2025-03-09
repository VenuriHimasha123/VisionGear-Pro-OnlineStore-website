<?php
// admin_register.php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    $sql = "INSERT INTO admins (username, password) VALUES ('$username', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Admin registered successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="post">
    <label>Username:</label>
    <input type="text" name="username" required><br>
    
    <label>Password:</label>
    <input type="password" name="password" required><br>

    <button type="submit">Register Admin</button>
</form>
