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
  // include 'session.php';
  ?>



  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Instructor Evaluation </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-1c888071-11f7-4152-b216-a350de12b871" data-elfsight-app-lazy></div> -->





        <form class="was-validated" method="post" >
          
        <?php
        include 'name_email.php';
        ?>

          <div class="form-check mb-3">
            <label class="form-check-label" for="validationFormCheck1">How engaging was the instructor?</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="not_engaging" name="engagement_rating" value="Not engaging at all" required>
              <label class="form-check-label" for="not_engaging">Not engaging at all</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="slightly_engaging" name="engagement_rating" value="Slightly engaging" required>
              <label class="form-check-label" for="slightly_engaging">Slightly engaging</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="moderately_engaging" name="engagement_rating" value="Moderately engaging" required>
              <label class="form-check-label" for="moderately_engaging">Moderately engaging</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="very_engaging" name="engagement_rating" value="Very engaging" required>
              <label class="form-check-label" for="very_engaging">Very engaging</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="extremely_engaging" name="engagement_rating" value="Extremely engaging" required>
              <label class="form-check-label" for="extremely_engaging">Extremely engaging</label>
            </div>
          </div><br>
          <div class="mb-3">
            <label for="instructor_improvement" class="form-label">What areas do you think the instructor could improve upon?</label>
            <textarea class="form-control is-invalid" id="instructor_improvement" name="improvement_areas" required></textarea>

          </div><br>
          <div class="mb-3">
            <label for="fair_treatment" class="form-label">Did the instructor treat all students fairly and equally?</label>
            <textarea class="form-control is-invalid" id="fair_treatment" name="fair_treatment" required></textarea>

          </div><br>
         
          <div class="form-check mb-3">
            <label class="form-check-label" for="overall_effectiveness">How would you rate the overall effectiveness of the instructor?</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="not_relevant" name="effectiveness_rating" value="Not relevant at all" required>
              <label class="form-check-label" for="not_relevant">Not relevant at all</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="slightly_relevant" name="effectiveness_rating" value="Slightly relevant" required>
              <label class="form-check-label" for="slightly_relevant">Slightly relevant</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="moderately_relevant" name="effectiveness_rating" value="Moderately relevant" required>
              <label class="form-check-label" for="moderately_relevant">Moderately relevant</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="very_relevant" name="effectiveness_rating" value="Very relevant" required>
              <label class="form-check-label" for="very_relevant">Very relevant</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="extremely_relevant" name="effectiveness_rating" value="Extremely relevant" required>
              <label class="form-check-label" for="extremely_relevant">Extremely relevant</label>
            </div>
          </div><br>


          
          <div class="form-check mb-3">
            <label class="form-check-label" for="learning_environment">Did the instructor create a positive learning environment?</label>
            
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="positive_env_yes" name="learning_environment" value="Yes" required>
              <label class="form-check-label" for="positive_env_yes">Yes</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="positive_env_no" name="learning_environment" value="No" required>
              <label class="form-check-label" for="positive_env_no">No</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="positive_env_partial" name="learning_environment" value="Partially" required>
              <label class="form-check-label" for="positive_env_partial">Partially</label>
            </div>
          </div><br>
          
          <div class="mb-3">
            <label for="liked_about_instructor" class="form-label">What did you like about the instructor?</label>
            <textarea class="form-control is-invalid" id="liked_about_instructor" name="liked_about_instructor" required></textarea>

          </div><br>
          <div class="mb-3">
            <label for="disliked_about_instructor" class="form-label">What did you dislike about the instructor?</label>
            <textarea class="form-control is-invalid" id="disliked_about_instructor" name="disliked_about_instructor" required></textarea>

          </div><br>
          <div class="form-check mb-3">
            <label class="form-check-label" for="satisfaction_logistics">How satisfied were you with the logistics of the Instructor?</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="very_dissatisfied" name="logistics_satisfaction" value="Very dissatisfied" required>
              <label class="form-check-label" for="very_dissatisfied">Very dissatisfied</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="somewhat_dissatisfied" name="logistics_satisfaction" value="Somewhat dissatisfied" required>
              <label class="form-check-label" for="somewhat_dissatisfied">Somewhat dissatisfied</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="neither_satisfied_nor_dissatisfied" name="logistics_satisfaction" value="Neither satisfied nor dissatisfied" required>
              <label class="form-check-label" for="neither_satisfied_nor_dissatisfied">Neither satisfied nor dissatisfied</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="somewhat_satisfied" name="logistics_satisfaction" value="Somewhat satisfied" required>
              <label class="form-check-label" for="somewhat_satisfied">Somewhat satisfied</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="very_satisfied" name="logistics_satisfaction" value="Very satisfied" required>
              <label class="form-check-label" for="very_satisfied">Very satisfied</label>
            </div>
          </div><br>
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="agree_terms" name="agree_terms" required>
            <label class="form-check-label" for="agree_terms">I agree to the terms and conditions.</label>
          
          </div><br>
          <div class="mb-3">
            <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
          </div>
        </form>

      </div>
    </div>
  </div> <!-- Start Footer bottom Area -->
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
  <!-- End About area -->


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
$liked_content = $_POST['liked_about_instructor'];
$disliked_content = $_POST['disliked_about_instructor'];
$engagement_rating = $_POST['engagement_rating'];
$improvement_areas = $_POST['improvement_areas'];
$fairness_feedback = $_POST['fair_treatment'];
$effectiveness_rating = $_POST['effectiveness_rating'];
$learning_environment = $_POST['learning_environment'];
$liked_about = $_POST['liked_about_instructor'];
$disliked_about = $_POST['disliked_about_instructor'];
$logistics_satisfaction = $_POST['logistics_satisfaction'];
$agreed_to_terms = isset($_POST['agree_terms']) ? 1 : 0;

  $q1 = "SELECT r_id FROM signup WHERE email='$email'";
  $ans2 = mysqli_query($con,$q1);
  $fetchrecord = mysqli_fetch_array($ans2);
  $rid = $fetchrecord['r_id'];


  // Insert data into the database
  $query = "INSERT INTO `instructor_feedback`( `r_id`, `engagement_rating`, `improvement_areas`, `fairness_feedback`, `effectiveness_rating`, `learning_environment`, `liked_about`, `disliked_about`, `logistics_satisfaction`, `agreed_to_terms`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  $statement = mysqli_prepare($con, $query);
  mysqli_stmt_bind_param($statement, "issssssssi", $rid, $engagement_rating, $improvement_areas, $fairness_feedback, $effectiveness_rating, $learning_environment, $liked_about, $disliked_about, $logistics_satisfaction, $agreed_to_terms);
  if (mysqli_stmt_execute($statement)) {
    echo '<script>alert("Feedback submitted successfully.");</script>';
} else {
    echo '<script>alert("Error inserting feedback: ' . mysqli_error($con) . '");</script>';
}

  mysqli_stmt_close($statement);
}

?>