<?php
  require_once('mysqli_connect.php');

  session_start();
  
  if($_REQUEST["active"]=="1")
  {
  	  
		$query="update users set status = 0 ,Expire_Time='1451649569' where student_id ='".$_REQUEST["student_id"]."'";
		//echo $query;
		mysql_query($query);
		
  }
  elseif($_REQUEST["reactivate"]=="2")
  {
  	    $expire=date( strtotime("+30 days"));
  	    $query="update users set Expire_Time='".$expire."' ,`status`='1' where student_id ='".$_REQUEST["student_id"]."'";
		//echo $query;
		mysql_query($query);
		
  }else
  {
  	    $expire=date( strtotime("+90 days"));
  	    $query="update users set Expire_Time='".$expire."', `status`='1' where student_id ='".$_REQUEST["student_id"]."'";
		//echo $query;
		mysql_query($query);
		
  }
  if($_REQUEST["AdminAdd"]=="1"){
  	$query="update users set admin=1 where student_id ='".$_REQUEST["student_id"]."'";
   // mysql_query($query);
   // $query="select from  users where student_id ='".$_REQUEST["student_id"]."'";
		echo $query;
		mysql_query($query);
		



  	}elseif($_REQUEST["AdminRemove"]=="1"){
  		$query="update users set admin=0 where student_id ='".$_REQUEST["student_id"]."'";
		//echo $query;
		mysql_query($query);
		

  	}
  
//print_r($_REQUEST);



  
?>
<html>
<meta http-equiv="refresh" content="0; url=AdminManagement.php" />
</html>
