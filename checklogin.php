<?php
	session_start();
	
// Connect to server 
	require_once('mysqli_connect.php');
	//$dbc = @mysql_connect(,,,db_database) OR die('Could not Connect to mySQL' . mysql_connect_error());

	$dbc = mysql_connect(db_host,db_user,db_password);
    mysql_select_db(db_database, $dbc);


// username and password sent from form as well as comparsion is done in this segmant
	$myusername=$_POST['student_id']; 
	$mypassword=$_POST['userpassword']; 
		$query="SELECT * FROM users WHERE student_id='$myusername' and userpassword=PASSWORD('$mypassword')";
		//echo $query;
		$result=mysql_query($query,$dbc);
// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);
	//echo $count;
	//redirect for the page on false or postive credentials
	if($count==1){

// Register $myusername,  and redirect to file "login_success.php"
	$_SESSION["myusername"] = $myusername;
 //print_r ($_SESSION);
		header("location:accountmanagement.php");
	}else{
		header("location:login.php?badlogin=True");
	}
?>