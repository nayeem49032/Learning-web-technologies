<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['user'] = [
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'role'     => $_POST['role']
    ];

    // Redirect to login page
    header("Location: ../View/login.php");
    exit();
}
?>