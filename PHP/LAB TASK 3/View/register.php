<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2 style="text-align:center;">Registration</h2>

<form method="POST" action="register_process.php" style="width:300px; margin:auto;">
    
    <input type="text" name="username" placeholder="Username" required style="width:100%; padding:8px;"><br><br>
    
    <input type="email" name="email" placeholder="Email" required style="width:100%; padding:8px;"><br><br>
    
    <input type="password" name="password" placeholder="Password" required style="width:100%; padding:8px;"><br><br>

    <select name="role" required style="width:100%; padding:8px;">
        <option value="">Select Role</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select><br><br>

    <input type="submit" name="submit" value="Login" style="width:100%; padding:8px;">
    
</form>

</body>
</html>