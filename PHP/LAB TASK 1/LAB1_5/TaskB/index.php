<!DOCTYPE html>

<head>
    <title>Currennt Page</title>
</head>

<body>
    <fieldset>
        <legend>GEGREE</legend>
        <form method="POST" action="">
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="BSC"> BSc
            <input type="checkbox" name="degree[]" value="MSC"> MSc
            <hr>
            <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
    <?php
    if (isset($_REQUEST['submit'])) {
        if (!empty($_REQUEST['degree'])) {
            echo "Selected Degree " . implode(",", $_REQUEST['degree']);
        } else {
            echo "<b style='color:red'>" ."No Degree Selected" ."</b>";
        }
    }
    ?>
</body>

</html>