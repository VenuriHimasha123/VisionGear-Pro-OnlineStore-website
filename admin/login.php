<?php
// login.php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE username = '$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        
        if (password_verify($password, $admin['password'])) { // Verify hashed password
            $_SESSION['admin_id'] = $admin['admin_id'];
            header('Location: admin_dashboard.php');
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "Admin not found!";
    }
}
?>

<form method="post">
    <label>Username:</label>
    <input type="text" name="username" required><br>
    
    <label>Password:</label>
    <input type="password" name="password" required><br>

    <button type="submit">Login</button>
</form>

