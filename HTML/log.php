
<!DOCTYPE html>
<html>

<head>
  <title>login</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css\book1css.css">
  <script src=""></script>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2"
        href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <!--<a href="" class="w3-bar-item w3-button w3-teal"><i class=" "></i>login</a>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Manage Your Trip <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="flight.html" class="w3-bar-item w3-button">Flight Booking</a>
          <a href="Login.html" class="w3-bar-item w3-button" onClick="showAlert()">Ticket Cancallation</a>
          <a href="#" class="w3-bar-item w3-button">Flight Schedule</a>
          <a href="#" class="w3-bar-item w3-button"> Time Table</a>
        </div>
      </div>
      <a href="special.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Special Offer</a>
      <a href="About.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About Us</a>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Contact<i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="contact.html" class="w3-bar-item w3-button">Contact Details</a>
          <a href="route.html" class="w3-bar-item w3-button">Feedback </a>
          <a href="#" class="w3-bar-item w3-button">Frequently Asked Question</a>
        </div>
      </div>-->

      
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Login<i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="Madmin.html" class="w3-bar-item w3-button">Admin</a>
        </div>
      </div>
      <a href="Register.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Register</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i
          class="fa fa-search"></i></a>
          <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="User"><i
            class="fa fa-user"></i></a>   
    </div>
    <!--<div class="w3-dropdown-hover w3-hide-small">
    
    </div>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
   </div>-->
    <!-- Navbar on small screens 
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
      <a href="#team" class="w3-bar-item w3-button">Manage Your Trip</a>
      <a href="special.html" class="w3-bar-item w3-button">Special Offer</a>
      <a href="About.html" class="w3-bar-item w3-button">About Us</a>
      <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
      <a href="#" class="w3-bar-item w3-button">Search</a>
    </div>
  </div>
  <br><br>-->
  <!--Sign In Form-->
  <body background="C:\xampp\htdocs\new\HTML\img\i2.jpg">

        <center>
               <!-- <h1 style="color:blue;"><i>SANJEEVANI CLINIC</i></h1>-->
            </center>
            

  <div class="login-form">
    <form method="POST" action="connect.php">
      <h2 style="color: black;" class="text-center">Sign in</h2>
      <div class="text-center social-btn">
        <a href="#" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i>Sign in with<b> Facebook</b></a>
      </div>
      <div class="text-center social-btn1">
        <a href="#" class="btn btn-danger btn-block"><i class="fa fa-google"></i>Sign in with <b>Google</b></a>
      </div>
      <div style="color: black;" class="or-seperator"><i>OR</i></div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" name="email" placeholder="email" required="required">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block login-btn" name="login">Sign in</button>
      </div>
      <div class="clearfix">
        <label class="p pull-left text-success checkbox-inline"><input type="checkbox"> Remember me</label>
        <a href="" class="pull-right text-success p">Forgot Password?</a>
      </div>

    </form>
    <div class=" hint-text small ">Don't have an account? <a href="Register.html" class="p1 text-success">Register
        Now!</a></div>

</body>

</html>