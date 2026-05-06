<?php
require_once('../Model/db.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if (empty($name) || empty($contact) || empty($username) || empty($password) || empty($role)) {
        echo "Error:Fill Up alll value";
    } else {
        $sql = "INSERT INTO users (name, contact, username, password, role)
            VALUES('$name', '$contact', '$username', '$password', '$role')";
        if (mysqli_query($conn, $sql)) {
            echo "Registration Successful" . $name;
            header("refresh:2; url=../View/login.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    }
}
?>