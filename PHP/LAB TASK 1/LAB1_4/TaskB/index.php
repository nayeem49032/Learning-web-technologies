<!DOCTYPE html>
<html lang="en">

<head>
    <title>Current page</title>
</head>

<body>
    <fieldset>
        <legend>GENDER</legend>
        <form method="post" action="">
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other
            <hr>
            <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
    <?php
    if (isset($_REQUEST['submit'])) {
        if (isset($_REQUEST['gender'])) {
            $gender = $_REQUEST['gender'];
            echo $gender;
        } else {
            echo "Please Select a Gender";
        }
    }
    ?>
</body>

</html>