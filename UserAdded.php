<html>
  <head>
    <title>Add User</title>
  </head>
  <body>
    <?php
      if(isset($_POST['submit']))//POST method for adding user data from the registar form in registar.php 
      {
       $data_missing = array();
       if(empty($_POST['First_Name']))
       {
        $data_missing[]= 'First Name';
       }else
       {
        $f_name = trim($_POST['First_Name']);
       }
       if(empty($_POST['Last_Name']))
       {
        $data_missing[]= 'Last Name';
       }else
       {
        $l_name = trim($_POST['Last_Name']);
       }
       if(empty($_POST['Email']))
       {
        $data_missing[]= 'Email';
       }else
       {
        $email = trim($_POST['Email']);
       }
        if(empty($_POST['Phone_Number']))
        {
         $data_missing[]= 'Phone Number';
        }else
        {
         $phone = trim($_POST['Phone_Number']);
        }  
        if(empty($_POST['Address']))
        {
         $data_missing[]= 'Address ';
        }else
        {
         $address = trim($_POST['Address']);
        }  
        if(empty($_POST['City']))
        {
         $data_missing[]= 'City';
        }else
        {
         $city = trim($_POST['City']);
        }
        if(empty($_POST['State']))
        {
         $data_missing[]= 'State';
        }else
        {
         $state = trim($_POST['State']);
        }
        if(empty($_POST['Zip']))
        {
         $data_missing[]= 'Zip Code';
        }else
        {
         $zip = trim($_POST['Zip']);
        }
        if(empty($_POST['userpassword']))
        {
         $data_missing[]= 'Password';
        }else
        {
         $password = trim($_POST['userpassword']);
        }
        if($_POST['expiredtime']=="30")
        {
         $expire=date( strtotime("+30 days"));
        }else if($_POST['expiredtime']=="90")
        {    
         $expire=date( strtotime("+90 days"));
        }
      }
      if (!empty($data_missing) == 0) 
      {
        $fshort=substr($f_name,0,1);
        $random=rand(1000,9999);
        $uniqueID="{$fshort}{$l_name}{$random}";
      }
      require_once('mysqli_connect.php');
      $query="insert into users (First_Name,Last_Name,Email,Phone_Number,Address,City,State,Zip,student_ID,date_entered,userpassword,Expire_Time) 
      values ('".$f_name."','".$l_name."','".$email."','".$phone."','".$address."','".$city."','".$state."','".$zip."','".$uniqueID."',(UNIX_TIMESTAMP(NOW())),PASSWORD('".$password."'),'".$expire."')";
        mysql_query($query);

        if (mysql_affected_rows() > 0)  {
            session_start();
            $_SESSION['name']=$uniqueID;
            header("location:index.php?added=true");
          } else  {
            echo'Error Occurred<br />';
            
        }
      
    ?>  
  </body>
</html>
