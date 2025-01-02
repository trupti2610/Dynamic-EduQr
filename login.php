<?php require 'connection.php';?>

<?php
	if(isset($_POST['userlogin'])){
		$email = $_POST['uemail'];
		$pass = $_POST['upass'];
		//echo $email.' '.$pass;
		
		$query = ("SELECT * FROM signup WHERE email='".$email."' AND password='".$pass."' ");
		$run = mysqli_query($con,$query);
		$count = mysqli_num_rows($run);
		//echo $count;
		
		if($count==1){
			//echo 'Login Successful';
            echo '<script>alert("Login Successful");</script>';

			session_start();
			$_SESSION['sess_user']= $email;
			header("Location:index.php");
		}
		else{
			// echo 'Invalid Username Or Password';
            echo '<script>alert("Invalid Username Or Password");</script>';

		}
	}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EduQR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/icons8-qr-code-scan-68.png" rel="icon">
    <link href="img/icons8-qr-code-scan-68.png" rel="icons8-qr-code-scan-68">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="css/nivo-slider-theme.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-example">

    <div id="preloader"></div>

    <!-- Start About area -->
    <div id="about" class="about-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2 style="margin-top: 100px;">Login Here!</h2>
                    </div>
                </div>
            </div>

            <form class="was-validated" method="post">
                <div class="mb-3">
                    <label for="inputEmail4" class="form-label" >Email( College Id)</label>
                    <input type="email" class="form-control" name="uemail" required>
                </div><br>
                <div class="mb-3">
                    <label for="inputEmail4" class="form-label">Password</label>
                    <input type="password" class="form-control" name="upass" required>
                </div><br>
                
                <div class="mb-3">
                      <!-- Checkbox -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" > Remember me </label>
                      </div>
                    </div>
                
                  <br>
                <div class="mb-3">
                    <button class="btn btn-success " type="submit" name="userlogin"> Login EduQR</button>
                  </div>
                  <div class="mb-3"><br>
                    <p>Not a member? <a href="signup.php">Register</a></p></div>
            </form>

            <!-- single-well end-->

            <!-- End col-->
        </div>
    </div>
    </div>
    <!-- End About area -->



    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/knob/jquery.knob.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="lib/appear/jquery.appear.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
