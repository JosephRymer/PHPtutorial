<?php  
 require_once('mysqli_connect.php');


 $sql="select First_Name , Last_Name, Email, Phone_Number, Address,City,State,Zip,status,student_id, Admin from users";


   if($_REQUEST["activesearch"]=="1"){
   $sql="SELECT * FROM users WHERE First_Name='".$_POST['search']."'";
 }
 // session_start();

?>
<html>
  <title>Validation Server</title>
    <head>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/bootstrap-theme.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-theme.min.css" rel="stylesheet">
      <link href="css/stylesheet.css" rel="stylesheet" >
    </head>
    <body>
      <div class="navbar navbar fixed top">
        <div class="navbar-inner">
          <a class="brand" href="http://library.tamu.edu/">
            <img src="images/logo.png" alt="Library Logo">
          </a>
        </div>
        <div class="color-field">
          <div class="row-fluid">
            <div class="span12 pull left breadcrumb">
                <form action="AdminManagement.php?activesearch=1" method="POST" class="control form-inline" style="float:right;">
                 <input type="text" class="form-control" name="search" placeholder="Search">
                 <input type="submit"  class="btn btn-default">
                 &nbsp<a href="refreshlist.php" class="btn pull-right btn-primary " role="button">Refresh List</a>                    
                </form>
              <ul class="breadcrumb">
                <a href="http://library.tamu.edu/">University Libraries</a> >
                <a href="index.php">Welcome Page</a> >
                <a href="accountmanagement.php">Account Management</a> >
                <a href="AdminManagement.php">Admin Management</a>
              </ul>
            </div>
          </div>
        </div>

        <div class="data-container">
          <table class="table table-bordered">
            <thead>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>City</th>
              <th>State</th>
              <th>Zip</th>
              <th>Status</th>
              <th>Admin</th>
            </thead>
            <tbody>
             <?php
              if($result=$conn->query($sql)){
               while ($row = $result->fetch_assoc()) 
              {
                echo'<tr>'.
                '<td>' . $row['First_Name'].'</td>'.
                '<td>' . $row['Last_Name'].'</td>'.
                '<td>' . $row['Email'].'</td>'.
                '<td>' . $row['Phone_Number'].'</td>'.
                '<td>' . $row['Address'].'</td>'.
                '<td>' . $row['City'].'</td>'.
                '<td>' . $row['State'].'</td>'.
                '<td>' . $row['Zip'].'</td>';
                if($row['status'] =='1')
                {
                  echo "<td> Active <a href='AdminStatusFunctions.php?active=1&student_id=" .  $row['student_id']  . "' class='btn btn-primary btn-xs' role='button'>Deactivate</a></td> ";
                }else
                {
                 echo "<td> Inactive <a href='AdminStatusFunctions.php?reactivate=2&student_id=" .  $row['student_id']  . "' class='btn btn-primary btn-xs' role='button'>30 days</a> ";
                 echo "<a href='AdminStatusFunctions.php?student_id=" .  $row['student_id']  . "' class='btn btn-primary btn-xs' role='button'>90 days</a></td> ";
                }
                if($row['Admin']=='0')
                {
                 echo "<td> No <a href='AdminStatusFunctions.php?AdminNo=1&student_id=" .  $row['student_id']  . "' class='btn btn-primary btn-xs' role='button'>Give Admin Rigts</a></td> ";
                }else
                {
                 echo "<td> Yes <a href='AdminStatusFunctions.php?AdminYes=1&student_id=" .  $row['student_id']  . "' class='btn btn-primary btn-xs' role='button'>Remove Admin Rights</a></td> ";
                }
              }}
              
            ?>
        </tbody>
      </table>
    </div>
  </body> 
  <div class="container text-center"> 
    <footer>
      <a title="Texas A&amp;M University" href="http://www.tamu.edu">Texas A&amp;M University</a>  
      <a title="Employment" href="http://library.tamu.edu/about/employment/">Employment</a>  
      <a title="Webmaster" href="http://library.tamu.edu/services/forms/contact-info.html">Webmaster</a>  
      <a title="Legal" href="http://library.tamu.edu/about/general-information/legal-notices.html">Legal</a>  
      <a title="Comments" href="http://guides.library.tamu.edu/AskTheLibraries">Comments</a>  
      <a title="979-845-3731" href="http://library.tamu.edu/about/phone/">979-845-3731</a>
      <a title="Site Map" href="http://library.tamu.edu/sitemap.html">Site Map</a>
      <a title="Accessibility" href="http://library.tamu.edu/accessibility/">Accessibility</a>
    </footer>
  </div>
</html>