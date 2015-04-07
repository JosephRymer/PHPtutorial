<?php
  require_once('mysqli_connect.php');

  $dbc = @mysqli_connect(db_host,db_user,db_password,db_database) OR die('Could not Connect to mySQL' . mysqli_connect_error());

  session_start();

  $query="SELECT *FROM users  WHERE student_id='".$_SESSION["myusername"]."'";

  $response = @mysqli_query($dbc, $query);
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
            <div class="control form-inline" style="float:right;">  
              <?php
                while($row=mysqli_fetch_array($response))
                {
                  if($row['Admin']=='1')//If there an Admin will echo a button for them to direct to Admin Managment
                  {  
                    echo'<a href="AdminManagment.php" class="btn pull-right btn-info" role="button">Admin Management </a>';
                  }
                }
                require_once('mysqli_connect.php');
                //$dbc = @mysqli_connect(db_host,db_user,db_password,db_database) OR die('Could not Connect to mySQL' . mysqli_connect_error());

                $query="select First_Name,Last_Name,Email,Phone_Number,Address,City,State,Zip from users  where student_id='".$_SESSION["myusername"]."'";

                $response = @mysqli_query($dbc, $query);
                $row=mysqli_fetch_array($response);
              ?>
            </div>
            <ul class="breadcrumb">
              <a href="http://library.tamu.edu/">University Libraries</a>
              >
              <a href="index.php">Welcome Page</a>
              >
              <a href="http://library.tamu.edu/directory">Account Management</a>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row-fluid">
        <div class="span12 appMain">
          <div class="span6">
            <div class="formedit">
              <form action="useraccountfunctions.php" method="post"><!-- Form for updating user Data post is sent to useraccountfunctions.php -->

                <p>First Name:
                  <input type="text" name="First_Name" size="30" value="<?php echo $row['First_Name']; ?>"</>
                </p>
                <p>Last Name:
                  <input type="text" name="Last_Name" size="30" value="<?php echo $row['Last_Name']; ?>"</>
                </p>
                <p>Email:
                  <input type="text" name="Email" size="30" value="<?php echo $row['Email'];  ?>"</>
                </p>
                <p>Phone Number:
                 <input type="text" name="Phone_Number" size="30" value="<?php echo $row['Phone_number'];  ?>"</>
                </p>
                <p>Address:
                  <input type="text" name="Address" size="30" value="<?php echo $row['Address'];  ?>"</>
                </p>
                <p>City:
                 <input type="text" name="City" size="30" value="<?php echo $row['City']; ?>"</>
                </p>
                <p>State:
                 <input type="text" name="State" size="2" value="<?php echo $row['State'];  ?>"</>
                </p>
                <p>Zip Code:
                 <input type="text" name="Zip" size="5" value="<?php echo $row['Zip']; ?>"</>
                </p>
                <p>Password:
                  <input type="password" name="userpassword" size="30" value=""</>
                </p>
                <p>
                  <input type="submit" name="Update" value="Update">
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
  </body> 
  <div class="text-center"> 
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