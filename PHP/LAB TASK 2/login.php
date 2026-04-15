<!DOCTYPE html>
<html>

<head>
    <title>Public Home</title>
</head>

<body>

    <table border="1" width="100%" cellspacing="0" cellpadding="10">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td>
                            <img src="images.webp" alt="X" width="40" height="40" align="middle">
                            <font size="5"><b>Company</b></font>
                        </td>
                        <td align="right">
                            <a href="public_home.php">Home</a> |
                            <a href="login.php">Login</a> |
                            <a href="registration.php">Registration</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td height="550px" valign="top">
                <fieldset>
                    <legend>LOGIN</legend>
                    <form method="POST" action="">
                        User Name : <input type="text" name="userName" value=""> <br>
                        User Name : <input type="password" name="password" value=""> <br>
                        <hr>
                        <input type="checkbox" name="rememberMe" value="">Remember Me <br> <br>
                        <input type="submit" name="submit" value="submit"> <a href="forgotPassword.php">Forgot Password?</a> 
                    </form>
                </fieldset>
            </td>
        </tr>

        <tr>
            <td align="center">
                Copyright &copy; 2017
            </td>
        </tr>
    </table>

</body>

</html>