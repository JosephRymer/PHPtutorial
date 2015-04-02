<?php
 require_once('mysqli_connect.php');

 $dbc = @mysqli_connect(db_host,db_user,db_password,db_database) OR die('Could not Connect to mySQL' . mysqli_connect_error());
 
    $query="SELECT * FROM users WHERE fisrt_name=".$_POST['search']."";

?>
