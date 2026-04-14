<!DOCTYPE html>
<html lang="en">

<head>
    <title>Current page</title>
</head>

<body>
    <fieldset>
        <legend>GENDER</legend>
        <form method="post" action="">
            <input type="radio" name="gender" value="Male" <?php if (isset($_REQUEST['gender']) && $_REQUEST['gender'] == "Male")
                echo "checked"; ?>> Male
            <input type="radio" name="gender" value="Female" <?php if (isset($_REQUEST['gender']) && $_REQUEST['gender'] == "Female")
                echo "checked"; ?>> Female
            <input type="radio" name="gender" value="Other" <?php if (isset($_REQUEST['gender']) && $_REQUEST['gender'] == "Other")
                echo "checked"; ?>> Other
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