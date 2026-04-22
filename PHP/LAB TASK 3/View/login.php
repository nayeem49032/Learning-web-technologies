<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <div style="width:300px; margin:100px auto; text-align:center;">
        <h2>Login</h2>
        <?php if(isset($_GET['error'])): ?>
            <p style="color:red;">Invalid username, password, or role.</p>
        <?php endif; ?>
        <form method="POST" action="../Controller/login_process.php">
            <input type="text" name="username" placeholder="Username" required style="width:90%; padding:8px;"><br>
            <input type="password" name="password" placeholder="Password" required style="width:90%; padding:8px;"><br>
            <select name="role" required style="width:90%; padding:8px;">
                <option value="">Select Role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select><br>
            <input type="submit" value="Login" style="width:95%; padding:8px; margin-top:10px;">
        </form>
        <a href="register.php">New user? Register here</a>
    </div>
</body>
</html>