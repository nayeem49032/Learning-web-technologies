<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_SESSION['user'] ?? null;

    if ($user && 
        $_POST['username'] === $user['username'] &&
        $_POST['password'] === $user['password'] &&
        $_POST['role'] === $user['role']
    ) {
        $_SESSION['logged_in'] = true;
        $_SESSION['role'] = $_POST['role'];

        if ($_POST['role'] === 'admin') {
            header("Location: admin.php");
        } else {
            header("Location: user.php");
        }
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }
}
?>