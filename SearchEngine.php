<?php
 require_once('mysqli_connect.php');


 
    $sql="SELECT * FROM users WHERE fisrt_name=".$_POST['search']."";

?>
