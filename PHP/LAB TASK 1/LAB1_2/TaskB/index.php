<!DOCTYPE html>

<head>
    <title>Current page</title>
</head>

<body>
    <fieldset>
        <legend>Email</legend>
        <form method="POST" action=""> <!--enctype="multipart/form-data-->
            <input type="email" name="email" value=""> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>

    <?php
    if (isset($_REQUEST['submit'])) {
        $email = $_REQUEST['email'];
        if (trim($email) == "") {
            echo "Null Email Adress";
        } else {
            echo "Hello " . "<b>" . htmlspecialchars($email) . "</b>";
        }
    }
    ?>
</body>

</html>