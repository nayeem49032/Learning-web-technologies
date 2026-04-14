<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Page</title>
</head>

<body>
    <fieldset>
        <form method="post" action="">
            <legend>Dath Of Birth</legend>
            dd
            <input type="text" name="dd" size="2" value="<?php if (isset($_REQUEST['dd'])) {
                echo $_POST['dd'];
            } ?>"> /
            mm
            <input type="text" name="mm" size="2" value="<?php if (isset($_REQUEST['mm'])) {
                echo $_POST['mm'];
            } ?>"> /
            yyyy
            <input type="text" name="yyyy" size="4" value="<?php if (isset($_REQUEST['yyyy'])) {
                echo $_POST['yyyy'];
            } ?>">
            <hr>
            <input type="submit" name="submit" value="submit">
        </form>
    </fieldset>
    <?php
    if (isset($_REQUEST['submit'])) {
        $dd = $_REQUEST['dd'];
        $mm = $_REQUEST['mm'];
        $yyyy = $_REQUEST['yyyy'];

        if (trim($dd) == "" || trim($mm) == "" || trim($yyyy) == "") {
            echo "Invalid Date";
        } else {
            echo "$dd-$mm-$yyyy";
        }
    }
    ?>
</body>

</html>