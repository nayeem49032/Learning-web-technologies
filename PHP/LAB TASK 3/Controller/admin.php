<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>
<h1>Welcome, Admin!</h1>
<p>This is the admin dashboard.</p>
<a href="logout.php">Logout</a>