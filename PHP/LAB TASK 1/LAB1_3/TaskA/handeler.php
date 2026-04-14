<!DOCTYPE html>
<html lang="en">

<head>
    <title>Handeler Page</title>
</head>

<body>
    <?php
    if (isset($_REQUEST['submit'])) {
        $dd = $_REQUEST['dd'];
        $mm = $_REQUEST['mm'];
        $yyyy = $_REQUEST['yyyy'];

        if (trim($dd)=="" || trim($mm)=="" || trim($yyyy) == "") {
            echo "Invalid Date";
        }
        else{
            echo "$dd-$mm-$yyyy";
        }
    }
    ?>
</body>

</html>