<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Login - Greenland Farmers Assistant</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>

  <!-- Stylesheets -->
  <link href="style/mainstyle.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="style/font-awesome.css">
  <!-- Flex slider -->
  <link rel="stylesheet" href="style/flexslider.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="style/prettyPhoto.css">
  <!-- Main stylesheet -->
  <link href="style/style.css" rel="stylesheet">

  <!-- Bootstrap responsive -->
  <link href="style/responsive.css" rel="stylesheet">
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<!-- Navbar starts -->

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="nav-collapse collapse">
		<ul class="nav pull-letf">
		<li><a href="index.html"><i class="icon-home"></i> Home</a></li></ul>
          <ul class="nav pull-right">
            <li><a href="loginform.php">Login</a></li>
            <li><a href="registeformr.php">Register</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
              <ul class="dropdown-menu">
                          <li><a href="logout.php">Logout</a></li>
             </ul>
            </li> 

             
          </ul>
        </div>
      </div>
    </div>
  </div>

<!-- Navbar ends -->


<!-- Sliding box starts -->
   <div class="slide-box">
      <div class="bor"></div>
      <div class="padd">
        <div class="slide-box-button">
          <i class="icon-chevron-left"></i>
        </div>
        <h5>Welcome  to Greenland Farmers Assistant</h5>
        Farmers Choice Farmers Happiness

        <hr />

        <div class="social">
          <a href="#"><i class="icon-facebook facebook"></i></a>
          <a href="#"><i class="icon-twitter twitter"></i></a>
          <a href="#"><i class="icon-linkedin linkedin"></i></a>
          <a href="#"><i class="icon-google-plus google-plus"></i></a>
          <a href="#"><i class="icon-pinterest pinterest"></i></a>
        </div>
      
      </div>
    </div>

<!-- Sliding box ends -->    

<!-- Main content starts -->

<div class="content">

  <div class="container-fluid">
    <div class="row-fluid">

      <div class="span12">  

                   <div class="well login-register">
                   
                   <h5>Login</h5>
                   <hr />

                    <!-- Login form -->
                    <form class="form-horizontal"action="mainlogin.php" method="post">
                      <!-- Email -->
                      <div class="control-group">
                        <label class="control-label" for="inputUsername">username</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" name="username">
                        </div>
                      </div>
                      <!-- Password -->
                      <div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                          <input type="password" id="inputPassword" name="password">
                        </div>
                      </div>
                      <div class="control-group">
                                            <label class="control-label" for="select">Position:</label>
                                            <div class="controls" name="position">                               
                                                <select name="position">
                                                <option>&nbsp;</option>
                                                <option>Farmer</option>
                                                <option>Supplier</option>
                                                <option>Admin</option>
                                                </select>
                                            </div>
                                          </div>   
                      <!-- Remember me checkbox and sign in button -->
                      <div class="control-group">
                        <div class="controls">
                          <label class="checkbox">
                            <input type="checkbox"> Remember me
                          </label>
                          <br>
                          <input type="submit" class="btn-success" name="login" value="Sign in"/>
                          <input type="reset" class="btn-success" name="reset" value="Reset"/>
                        </div>
                      </div>
                    </form>

                   </div>

      </div>

    </div>
  </div>

</div>

<div class="clearfix"></div>

<!-- Main content ends -->
	
<!-- Footer -->
<footer>
            <div class="bor"></div>
            <p>Copyright &copy; <a href="#">Greenland Farmers Assistant</p>
      
</footer>		

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

<!-- JS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="js/filter.js"></script> <!-- Filter JS -->
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script> <!-- CarouFredSel -->
<script src="js/jquery.flexslider-min.js"></script> <!-- Flexslider -->
<script src="js/jquery.isotope.js"></script> <!-- Isotope -->
<script src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->
<script src="js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="js/custom.js"></script> <!-- Main js file -->
</body>
</html>