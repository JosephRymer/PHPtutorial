<?php  
 //Helps to clear out any old session items fform the cahce so it is more secure
 session_destroy();
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
              <ul class="breadcrumb">
               <a href="http://library.tamu.edu/">University Libraries</a>
               >
               <a href="http://library.tamu.edu/directory">Welcome Page</a>
               >
               <a href="http://library.tamu.edu/directory">Login</a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row-fluid">
          <div class="span12 appMain"><!-- This containts the form for login in to the Account Management-->
            <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                <form name="form1" method="post" action="checklogin.php">
                  <td>
                   <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                     <td colspan="3"><strong>Member Login </strong></td>
                    </tr>
                    <tr>
                     <td width="78">Username</td>
                     <td width="6">:</td>
                     <td width="294"><input name="student_id" type="text" id="myusername"></td>
                    </tr>
                    <tr>
                     <td>Password</td>
                     <td>:</td>
                     <td><input name="userpassword" type="password" id="mypassword"></td>
                    </tr>
                    <tr>
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                     <td><input type="submit" name="Submit" value="Login"></td>
                    </tr>
                  </table>
                </td>
              </form>
            </table>
          </div>
        </div>
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
    <?php //This is the Javasciprt alert box method for if a user is entering bad login details
      if($_REQUEST["badlogin"]=='True'){
    ?>
      <script>
        alert("Wrong Username or Password");
      </script>
      <?php } ?>
</html>