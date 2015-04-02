<?php
	session_start();
		$host="localhost"; // Host name 
		$username="root"; // Mysql username 
		$password=""; // Mysql password 
		$db_name="validation"; // Database name 
		$tbl_name="users"; // Table name 
// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");


// username and password sent from form as well as comparsion is done in this segmant
	$myusername=$_POST['student_id']; 
	$mypassword=$_POST['userpassword']; 
		$query="SELECT * FROM users WHERE student_id='$myusername' and userpassword=PASSWORD('$mypassword')";
		//echo $query;
		$result=mysql_query($query);
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