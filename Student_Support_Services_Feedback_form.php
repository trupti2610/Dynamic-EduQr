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
  <?php
  include 'form_header.php';
  ?>


  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>
              Student Support Services</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <form class="was-validated" method="post" >

        <?php
        include 'name_email.php';
        ?>
          
          <div class="mb-3">
            <label for="validationTextarea1" class="form-label">Did the support services meet your expectations? Why or why not?</label>
            <textarea class="form-control is-invalid" id="validationTextarea1" name="support_meet_expectations" required></textarea>

          </div><br>
          <div class="mb-3">
            <label for="validationTextarea2" class="form-label">How likely are you to recommend these support services to other students based on your experience?</label>
            <textarea class="form-control is-invalid" id="validationTextarea2" name="recommendation_likelihood" required></textarea>

          </div><br>
          
          <div class="form-check mb-3">
            <label class="form-check-label">How would you rate the availability and effectiveness of tutoring services?
            </label>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="tutoring_rating" value="Excellent" required>
              <label class="form-check-label">Excellent
               
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" name="tutoring_rating" value="Good" required>
              <label class="form-check-label">
                Good

              </label>
              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" name="tutoring_rating" value="Average" required>
              <label class="form-check-label">
                Average

              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" name="tutoring_rating" value="Below Average" required>
              <label class="form-check-label">
                Below Average


            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" name="tutoring_rating" value="Poor" required>
              <label class="form-check-label">
                Poor</label>
              </label>
            </div>
          </div><br>
          <div class="mb-3">
            <label for="validationTextarea3" class="form-label">Were there any other specific support services you utilized? (Counseling, disability services, financial aid, etc.)</label>
            <textarea class="form-control is-invalid" id="validationTextarea3" name="specific_support_services" required></textarea>

          </div><br>

          <div class="mb-3">
            <label for="validationTextarea4" class="form-label">Were there any specific sessions or speakers you found particularly impactful?</label>
            <textarea class="form-control is-invalid" id="validationTextarea4" name="impactful_sessions_speakers" required></textarea>

          </div><br>

          <div class="form-check mb-3">
            <label class="form-check-label">Did the support services contribute positively to your academic success and well-being?
            </label>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="contribution_to_success" value="Yes" required>
              <label class="form-check-label">
                Yes
              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" name="contribution_to_success" value="No" required>
              <label class="form-check-label">
                No
              </label>
            </div>

          </div><br>
          
          <div class="form-check mb-3">
            <label class="form-check-label">How would you rate the academic advising services?
            </label>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="advising_rating" value="Excellent" required>
              <label class="form-check-label">Excellent

            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" name="advising_rating" value="Good" required>
              <label class="form-check-label">
                Good

              </label>
              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" name="advising_rating" value="Average" required>
              <label class="form-check-label">
                Average

              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" name="advising_rating" value="Below Average" required>
              <label class="form-check-label">
                Below Average


            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" name="advising_rating" value="Poor" required>
              <label class="form-check-label">
                Poor</label>
              </label>
            </div>
          </div><br>
          
         
          <div class="form-check mb-3">
            <label class="form-check-label">Any additional support services or resources you would like to see offered?
            </label>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="additional_support_services" value="Yes" required>
              <label class="form-check-label">
                Yes
              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" name="additional_support_services" value="No" required>
              <label class="form-check-label">
                No
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
  $liked_content = $_POST['support_meet_expectations'];
  $disliked_content = $_POST['recommendation_likelihood'];
  $relevance = $_POST['tutoring_rating'];
  $instructor_knowledge = $_POST['specific_support_services'];
  $instructor_engagement = $_POST['impactful_sessions_speakers'];
  $liked_instructor = $_POST['contribution_to_success'];
  $disliked_instructor = ''; // You might need to handle this field differently based on your form
  $training_satisfaction = $_POST['advising_rating'];
  $terms_accepted = isset($_POST['terms_and_conditions']) ? 1 : 0;

  $q1 = "SELECT r_id FROM signup WHERE email='$email'";
  $ans2 = mysqli_query($con,$q1);
  $fetchrecord = mysqli_fetch_array($ans2);
  $rid = $fetchrecord['r_id'];


 // Insert data into the database
 $query = "INSERT INTO `student_feedback`(`r_id`, `expectations`, `likelihood_to_recommend`, `tutoring_rating`, `utilized_services`, `impactful_sessions`, `success_contribution`, `advising_rating`, `additional_requested`, `agreed_terms`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

 $statement = mysqli_prepare($con, $query);
 mysqli_stmt_bind_param($statement, "issssssssi", $rid, $liked_content, $disliked_content, $relevance, $instructor_knowledge, $instructor_engagement, $liked_instructor, $disliked_instructor, $training_satisfaction, $terms_accepted);

 if (mysqli_stmt_execute($statement)) {
  echo '<script>alert("Feedback submitted successfully.");</script>';
} else {
  echo '<script>alert("Error inserting feedback: ' . mysqli_error($con) . '");</script>';
}
  mysqli_stmt_close($statement);
}

?>