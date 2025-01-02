<?php require'connection.php';?>
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

  <!-- =======================================================
    Theme Name: Qr-code-based-feedback-system
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <?php
  include 'form_header.php';
  ?>


  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Program </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <form class="was-validated" method="post">

        <?php
        include 'name_email.php';
        ?>

          <div class="mb-3">
            <label for="validationTextarea" class="form-label">How satisfied are you with the career services provided by the program?</label>
            <textarea class="form-control is-invalid" name="career_services_satisfaction" id="validationTextarea1" required></textarea>

          </div><br>
          <div class="mb-3">
            <label for="validationTextarea" class="form-label">How would you rate the variety of courses offered within the program? </label>
            <textarea class="form-control is-invalid" name="variety_of_courses_rating" id="validationTextarea2" required></textarea>

          </div><br>


          <div class="form-check mb-3">
            <label class="form-check-label" for="validationFormCheck1">Were there opportunities for collaboration and teamwork in program?
            </label>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="validationFormCheck2" name="collaboration_and_teamwork_opportunities" value="Yes" required>
              <label class="form-check-label" for="validationFormCheck2">
                Yes
              </label>
            </div>
            <div class="form-check mb-3">
            <input type="radio" class="form-check-input" id="validationFormCheck3" name="collaboration_and_teamwork_opportunities" value="No" required>
              <label class="form-check-label" for="validationFormCheck3">
                No
              </label>
            </div>

          </div><br>
          <div class="form-check mb-3">
    <label class="form-check-label" for="validationFormCheck1">Were there opportunities for networking, internships, or career development?</label>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="validationFormCheck2" name="networking_internships_career_development" value="Excellent" required>
        <label class="form-check-label" for="validationFormCheck2"> Excellent
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="validationFormCheck3" name="networking_internships_career_development" value="Good" required>
        <label class="form-check-label" for="validationFormCheck3"> Good
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="validationFormCheck4" name="networking_internships_career_development" value="Average" required>
        <label class="form-check-label" for="validationFormCheck4"> Average
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="validationFormCheck5" name="networking_internships_career_development" value="Below Average" required>
        <label class="form-check-label" for="validationFormCheck5"> Below Average
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="validationFormCheck6" name="networking_internships_career_development" value="Poor" required>
        <label class="form-check-label" for="validationFormCheck6"> Poor
    </div>
</div><br>



<div class="form-check mb-3">
    <label class="form-check-label" for="validationFormCheck1">Did you feel supported in your academic journey within the program?
    </label>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="validationFormCheck2" name="academic_support_within_program" value="Yes" required>
        <label class="form-check-label" for="validationFormCheck2"> Yes
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="validationFormCheck3" name="academic_support_within_program" value="No" required>
        <label class="form-check-label" for="validationFormCheck3"> No
    </div>
</div><br>


          
         <div class="mb-3">
    <label for="validationTextarea" class="form-label">If applicable, how well did the program prepare you for your desired career path? </label>
    <textarea class="form-control is-invalid" id="validationTextarea" name="career_preparation" required></textarea>
</div><br>

<div class="form-check mb-3">
    <label class="form-check-label" for="validationFormCheck1">How satisfied are you with the career services provided by the program?
    </label>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="validationFormCheck2" name="career_satisfaction" value="Very dissatisfied" required>
        <label class="form-check-label" for="validationFormCheck2">
            Very dissatisfied
        </label>
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="validationFormCheck3" name="career_satisfaction" value="Somewhat dissatisfied" required>
        <label class="form-check-label" for="validationFormCheck3">
            Somewhat dissatisfied
        </label>
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="validationFormCheck4" name="career_satisfaction" value="Neither satisfied nor dissatisfied" required>
        <label class="form-check-label" for="validationFormCheck4">
            Neither satisfied nor dissatisfied
        </label>
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="validationFormCheck5" name="career_satisfaction" value="Somewhat satisfied" required>
        <label class="form-check-label" for="validationFormCheck5">
            Somewhat satisfied
        </label>
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="validationFormCheck6" name="career_satisfaction" value="Very satisfied" required>
        <label class="form-check-label" for="validationFormCheck6">
            Very satisfied
        </label>
    </div>
</div><br>

          <div class="form-check mb-3">
          <input type="checkbox" class="form-check-input" id="validationFormCheck1" name="terms_and_conditions" required>
            <label class="form-check-label" for="validationFormCheck1">I agree to the terms and conditions.</label>

          </div><br>
          <div class="mb-3">
            <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
          </div>
        </form>

      </div>
    </div>
  </div>
  <!-- End About area -->
 <!-- Start Footer bottom Area -->
 <footer>
    
  <div class="footer-area-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="copyright text-center">
            <p>
              &copy; Copyright <strong>EduQR</strong>.
            </p>
          </div>
        
        </div>
      </div>
    </div>
  </div>
</footer>

  <!-- Start Footer bottom Area -->

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
<?php
if(isset($_POST['submit'])){
    // Retrieve form data
    $career_services_satisfaction = $_POST['career_services_satisfaction'];
    $variety_of_courses_rating = $_POST['variety_of_courses_rating'];
    $collaboration_opportunities = $_POST['collaboration_and_teamwork_opportunities'];
    $career_opportunities_rating = $_POST['networking_internships_career_development'];
    $academic_support = $_POST['academic_support_within_program'];
    $career_preparation_feedback = $_POST['career_preparation'];
    $overall_career_services_satisfaction = $_POST['career_satisfaction'];
    $agreed_to_terms = isset($_POST['terms_and_conditions']) ? 1 : 0;

    // Retrieve r_id from the database
    $q1 = "SELECT r_id FROM signup WHERE email='$email'";
    $ans2 = mysqli_query($con,$q1);
    $fetchrecord = mysqli_fetch_array($ans2);
    $rid = $fetchrecord['r_id'];

    // Insert data into the database
    $query = "INSERT INTO `program_feedback`(`r_id`, `career_services_satisfaction`, `course_variety_rating`, `collaboration_opportunities`, `career_opportunities_rating`, `academic_support`, `career_preparation_feedback`, `overall_career_services_satisfaction`, `agreed_to_terms`, `submission_date`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

    $statement = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($statement, "isssssssi", $rid, $career_services_satisfaction, $variety_of_courses_rating, $collaboration_opportunities, $career_opportunities_rating, $academic_support, $career_preparation_feedback, $overall_career_services_satisfaction, $agreed_to_terms);

    // Execute the statement and check for errors
    if (mysqli_stmt_execute($statement)) {
      echo '<script>alert("Feedback submitted successfully.");</script>';
  } else {
      echo '<script>alert("Error inserting feedback: ' . mysqli_error($con) . '");</script>';
  }
    // Close the statement
    mysqli_stmt_close($statement);
}
?>
