<!DOCTYPE html>
<head>
    <title>Handeler Page</title>
</head>
<body>
    <?php
        if(isset($_REQUEST['submit'])){
            $email=$_REQUEST['email'];
            if(trim($email) == ""){
                echo "Null Email Adress";
            }
            else{
                echo "Hello "  ."<b>" .htmlspecialchars($email) ."</b>" ;
            }
        }
    ?>
</body>
</html>