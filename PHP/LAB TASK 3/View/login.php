<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; background:#f2f2f2; }
        .box {
            width:300px; margin:100px auto; padding:20px;
            background:white; border:1px solid #ccc; text-align:center;
        }
        input, select {
            width:90%; padding:8px; margin:8px 0;
        }
        button {
            width:95%; padding:8px; background:green; color:white; border:none;
        }
        a { display:block; margin-top:10px; }
    </style>
</head>
<body>

<div class="box">
    <h2>Login</h2>

    <form method="POST" action="login_process.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <select name="role" required>
            <option value="">Select Role</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

        <input type="submit" name="submit" value="Login">
    </form>

    <a href="register.php">New user? Register here</a>
</div>

</body>
</html>