<html>
  <title>User Registration</title>
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
                <a href="http://library.tamu.edu/directory">Registar</a>
              </ul>
            </div>
          </div>
        </div>
       </div>
       <div class="container">
        <div class="row-fluid">
          <div class="span12 appMain">
             <p>Add Info</p>
              <div class="registaredit">
                <form action="UserAdded.php" method="post"><!-- Form for adding a User -->
                  <p>First Name:
                  <input type="text" name="First_Name" size="30" value=""</>
                  </p>
                  <p>Last Name:
                  <input type="text" name="Last_Name" size="30" value=""</>
                  </p>
                  <p>Email:
                  <input type="text" name="Email" size="30" value=""</>
                  </p>
                  <p>Phone Number:
                  <input type="text" name="Phone_Number" size="30" value=""</>
                  </p>
                  <p>Address:
                  <input type="text" name="Address" size="30" value=""</>
                  </p>
                  <p>City:
                  <input type="text" name="City" size="30" value=""</>
                  </p>
                  <p>State:
                  <input type="text" name="State" size="2" value=""</>
                  </p>
                  <p>Zip Code:
                  <input type="text" name="Zip" size="5" value=""</>
                  </p>
                  <p>Password:
                  <input type="password" name="userpassword" size="30" value=""</>
                  </p>
                  <input type="radio" name="expiredtime" checked  value="30">30 days
                  <input type="radio" name="expiredtime"  value="90">90 days
                  <p><input type="submit" name="submit" value="Submit"></p>
                </form>
              </div>
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
</html>