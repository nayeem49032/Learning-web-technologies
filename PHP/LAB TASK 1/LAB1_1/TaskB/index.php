<html>

<head>
    <title>Current Page</title>
</head>

<body>
    <h2>Option B</h2>
    <fieldset>
        <legend>Name</legend>
        <form method="POST">
            <input type="text" name="username" placeholder="Input User Name">
            <button type="submit" name="submit">Submit</button>
        </form>
    </fieldset>
    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        if (trim($username) == "") {
            echo "Null User name";
        } else {
            echo "Hello " . htmlspecialchars($username);
        }
    }
    ?>
</body>

</html>