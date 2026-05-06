<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Account</title>
</head>

<body>
    <h2>Registration</h2>
    <form method="post" action="../Controller/controller.php">
        <fieldset>
            <legend>Registration</legend>
            <input type="text" name="name" value="" placeholder="Name"> <br> <br>
            <input type="text" name="contact" placeholder="Phone Number" value=""> <br> <br>
            <input type="text" name="username" placeholder="Use Name" value=""> <br> <br>
            <input type="text" name="password" placeholder="Password" value=""> <br> <br>
            <select name="role" id="role">
                <option value="">Select Role</option>
                <option value="admin">Admin</option>
                <option value="employee">Employee</option>
            </select>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</body>

</html>