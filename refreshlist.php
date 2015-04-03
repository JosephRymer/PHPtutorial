<?php //Runs the expiration Method for determining if a user is still Active

require_once('mysqli_connect.php');
    $query="select date_entered , student_id from users ";
    $response = @mysqli_query($query);
    if($response)
    {
      while($row=mysqli_fetch_array($response))
      {
        $expiredtime ="1451649569";
          if($row["Expire_Time"] >= $expiredtime)
          {
            $query="update users set status = 0 where student_id ='".$row["student_id"]."'";
              @mysqli_query($dbc,$query);
          }else{
            $query="update users set status = 1 where student_id ='".$row["student_id"]."'";
              @mysqli_query($dbc,$query); 
          }
      }
    }
  
?>
<html>
  <meta http-equiv="refresh" content="0; url=AdminManagement.php" /> 
</html>
