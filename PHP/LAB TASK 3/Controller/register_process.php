<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['user'] = [
        'username' => $_POST['username'],
        'email'    => $_POST['email'],
        'password' => $_POST['password'],
        'role'     => $_POST['role']
    ];

    header("Location: login.php");
    exit();
}
?>