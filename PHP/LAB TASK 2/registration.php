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
                <form method="POST" action="">
                    <fieldset>
                        <legend>REGISTRATION</legend>
                        Name : <input type="text" name="name" value=""> <br>
                        <hr>
                        Email : <input type="email" name="email" value=""><br>
                        <hr>
                        User Name : <input type="text" name="userName" value=""> <br>
                        <hr>
                        Password : <input type="password" name="password" value=""> <br>
                        <hr>
                        Confirm Password : <input type="password" name="comfirmPassword" value=""> <br>
                        <hr>
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="female"> Female
                            <input type="radio" name="gender" value="other"> Other
                        </fieldset>
                        <fieldset>
                            <legend>Dath Of Birth</legend>
                            <input type="text" name="dd" value="" size="1"> /
                            <input type="text" name="mm" value="" size="1"> /
                            <input type="text" name="yyy" value="" size="2"> <i>(dd/mm/yyyy)</i>
                        </fieldset>
                        <br>
                        <input type="submit" name="submit" value="submit">
                        <input type="reset" name="reset" value="Reset">
                    </fieldset>
                </form>
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