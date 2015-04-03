<?php // Used for Connection to the Database
//	define  ('db_user', 'root');
//	define  ('db_password', '');
//	define  ('db_host', 'localhost');
//	define ('db_database', 'validation');
//	$dbc = @mysqli_connect(db_host,db_user,db_password,db_database) OR die('Could not Connect to mySQL' . mysqli_connect_error());
?>
<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED); 

$dbhost = "localhost";
$dbuser = "root";
$dbpass="";
$dbname = "validation";
//Create connection 

$conn=new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($conn->connect_error)
{
die("Connection failed: ".$conn->connect_error);
}
else
{
//echo "Connected Successfully - $dbhost";
//echo '<br>dbConnect - Connection variable'; var_dump($conn);echo'<br><br>';
}
?>