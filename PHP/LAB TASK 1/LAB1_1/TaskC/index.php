<!DOCTYPE html>

<head>
    <title>Document</title>
</head>

<body>
    <h2>Option C</h2>
    <fieldset>
        <legend>Name</legend>
        <form method="POST">
            <input type="text" name="username" value="<?php if (isset($_POST['username'])) {
                echo $_POST['username'];
            } ?>">
            <input type="submit" name="submit" value="submit">
        </form>
    </fieldset>
    <?php
    if(isset($_POST['submit'])){
        echo "Hello ". $_POST['username'];
    }
    ?>
</body>
</html>