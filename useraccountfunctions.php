<?php
       session_start(); //POST update method for updating data from the accountmanagment form in accountmanagment.php 
        if(isset($_POST['Update']))
        {
         $data_missing = array();
            if(!empty($_POST['First_Name']))
            {
             $f_name = trim($_POST['First_Name']);
            }
            if(!empty($_POST['Last_Name']))
            {
             $l_name = trim($_POST['Last_Name']);
            }
            if(!empty($_POST['Email']))
            {
             $email = trim($_POST['Email']);
            }
            if(!empty($_POST['Phone_Number']))
            {
             $phone = trim($_POST['Phone_Number']);
            }  
            if(!empty($_POST['Address']))
            {
             $address = trim($_POST['Address']);
            }  
            if(!empty($_POST['City']))
            {
             $city = trim($_POST['City']);
            }
            if(!empty($_POST['State']))
            {
             $state = trim($_POST['State']);
            }
            if(!empty($_POST['Zip']))
            {
             $zip = trim($_POST['Zip']);
            }
            if(!empty($_POST['userpassword']))
            {
             $password = trim($_POST['userpassword']);
            }
            if(!empty($_POST['IDcheck']))
            {
             $IDcheck= trim(($_POST['IDcheck']));
            }
        }
        require_once('mysqli_connect.php');
            $query="Update  users 
            SET 
            First_Name ='".$f_name."',
            Last_Name ='".$l_name."',
            Email ='".$email."',
            Phone_Number ='".$phone."',
            Address ='".$address."',
            City ='".$city."',
            State ='".$state."',
            Zip ='".$zip."',
            userpassword =PASSWORD('".$password."') WHERE student_id='".$_SESSION["myusername"]."'";

       mysql_query($query)

?>
<html>
    </body>
        <meta http-equiv="refresh" content="0; url=accountmanagement.php" />
    </body>
</html>