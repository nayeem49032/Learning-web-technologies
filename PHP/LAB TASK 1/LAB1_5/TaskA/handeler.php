<!DOCTYPE html>
<html lang="en">
<head>
    <title>Handeler Page</title>
</head>
<body>
    <?php
    if(isset($_REQUEST['submit'])){
       if(!empty($_REQUEST['degree'])){
        echo "Selected Degrees " .implode(",",$_REQUEST['degree']);
       } 
       else{
        echo "No Degree Selected";
       }
    }
    ?>
</body>
</html>