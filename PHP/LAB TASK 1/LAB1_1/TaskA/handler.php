<title>Handler Page</title>
<?php
if (isset($_REQUEST['submit'])) {
    $username=$_REQUEST['username'];
    if($username == ""){
        echo"<b>Null UserName!</b>";
    }
    else{
        echo"User Name: "."<b>".$username ."</b>";
    }
}
?>