<?php
session_start();
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows ==1) {
        $_SESSION['username'] = $username;
        header("Location: index.html");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
