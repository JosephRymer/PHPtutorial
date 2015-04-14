<?php
  if($_REQUEST["logout"]=="1"){
  	session_unset("secure");
  	session_destroy();
 header("location:index.php");
  }else{
	session_start();
	
// Connect to server 
	require_once('mysqli_connect.php');
	//$dbc = @mysql_connect(,,,db_database) OR die('Could not Connect to mySQL' . mysql_connect_error());


// username and password sent from form as well as comparsion is done in this segmant
	
	    $myusername=$_POST['student_id']; 
	    $mypassword=$_POST['userpassword']; 

		 $query="SELECT * FROM users Admin WHERE student_id='$myusername' and userpassword=PASSWORD('$mypassword')";

		$result=mysql_query($query,$dbc);
         $row = mysql_fetch_row($result);
	     $count=mysql_num_rows($result);
         $_SESSION["myusername"] = $myusername;
	//redirect for the page on false or postive credentials
	if($count==1 && $row[12]=="0")
	{
		$_SESSION["secure"]="12145";
	 header("location:accountmanagement.php");
	}else if ($count==1 && $row[12]=="1")
	{
		$_SESSION["secure"]="12145";
     header("location:AdminManagement.php");
    }else
    {
    	$_SESSION["secure"]="12145";
     header("location:login.php?badlogin=True");
    }
}
?>