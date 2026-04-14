<!DOCTYPE html>
<html lang="en">

<head>
    <title>Handeler Page</title>
</head>

<body>
    <?php
    if(isset($_REQUEST['submit'])){
       if(isset($_REQUEST['gender'])){
        $gender=$_REQUEST['gender'];
        echo $gender;
       }
       else{
        echo "Please Select a Gender";
       }
    }
    ?>

</body>
</html>