<?php
  require_once('mysqli_connect.php');

  $dbc = @mysqli_connect(db_host,db_user,db_password,db_database) OR die('Could not Connect to mySQL' . mysqli_connect_error());

  session_start();
  
  if($_REQUEST["active"]=="1")
  {
  	  
		$query="update users set status = 0 where student_id ='".$_REQUEST["student_id"]."'";
		echo $query;
		@mysqli_query($dbc,$query);
		mysql_close();
  }
  elseif($_REQUEST["reactivate"]=="2")
  {
  	    $expire=date( strtotime("+30 days"));
  	    $query="update users set Expire_Time='".$expire."'where student_id ='".$_REQUEST["student_id"]."'";
		echo $query;
		@mysqli_query($dbc,$query);
		mysql_close();
  }else
  {
  	    $expire=date( strtotime("+90 days"));
  	    $query="update users set Expire_Time='".$expire."'where student_id ='".$_REQUEST["student_id"]."'";
		echo $query;
		@mysqli_query($dbc,$query);
		mysql_close();
  }
  if($_REQUEST["AdminNo"]=="1"){
  	    $query="update users set admin = 1 where student_id ='".$_REQUEST["student_id"]."'";
		echo $query;
		@mysqli_query($dbc,$query);
		mysql_close();


  	}elseif($_REQUEST["AdminYes"]=="1"){
  		$query="update users set admin = 0 where student_id ='".$_REQUEST["student_id"]."'";
		echo $query;
		@mysqli_query($dbc,$query);
		mysql_close();

  	}
  



  
?>
<html>
 <meta http-equiv="refresh" content="0; url=AdminManagement.php" />
</html>
