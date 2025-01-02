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
  <!-- header end -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>
              Event </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-1c888071-11f7-4152-b216-a350de12b871" data-elfsight-app-lazy></div> -->

        <form class="was-validated" method="post">

        <?php
        include 'name_email.php';
        ?>
         
          <div class="mb-3">
            <label for="event_name" class="form-label">Name Of Event</label>
            <input type="text" class="form-control" id="event_name" name="event_name">
          </div><br>
          <div class="mb-3">
            <label for="recommendation" class="form-label">How likely are you to recommend similar events to others based on this experience?</label>
            <textarea class="form-control is-invalid" id="recommendation" name="recommendation" required></textarea>

          </div><br>
          <div class="mb-3">
            <label for="expectations" class="form-label">Did the event meet your expectations? Why or why not?</label>
            <textarea class="form-control is-invalid" id="expectations" name="expectations" required></textarea>

          </div><br>
          <div class="mb-3">
            <label for="valuable_aspects" class="form-label">What aspects of the event did you find most enjoyable or valuable?</label>
            <textarea class="form-control is-invalid" id="valuable_aspects" name="valuable_aspects" required></textarea>

          </div><br>
          <div class="form-check mb-3">
            <label class="form-check-label" for="value_for_money">Did the event provide value for the time and money invested?
            </label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="value_for_money" name="value_for_money" value="Excellent" required>
              <label class="form-check-label" for="value_for_money">Excellent
               
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="value_for_money" name="value_for_money" value="Good" required>
              <label class="form-check-label" for="value_for_money">
                Good

              </label>
              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="value_for_money" name="value_for_money" value="Average" required>
              <label class="form-check-label" for="value_for_money">
                Average

              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="value_for_money" name="value_for_money" value="Below Average" required>
              <label class="form-check-label" for="value_for_money">
                Below Average


            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="value_for_money" name="value_for_money" value="Poor" required>
              <label class="form-check-label" for="value_for_money">
                Poor</label>
              </label>
            </div>
          </div><br>

          <div class="mb-3">
            <label for="impactful_sessions" class="form-label">Were there any specific sessions or speakers you found particularly impactful?</label>
            <textarea class="form-control is-invalid" id="impactful_sessions" name="impactful_sessions" required></textarea>

          </div><br>



          <div class="form-check mb-3">
            <label class="form-check-label" for="overall_quality">How would you rate the overall quality of the event?</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="overall_quality" name="overall_quality" value="Excellent" required>
              <label class="form-check-label" for="overall_quality"> Excellent

            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="overall_quality" name="overall_quality" value="Good" required>
              <label class="form-check-label" for="overall_quality">
                Good

              </label>
              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="overall_quality" name="overall_quality" value="Average" required>
              <label class="form-check-label" for="overall_quality">
                Average

              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="overall_quality" name="overall_quality" value="Below Average" required>
              <label class="form-check-label" for="overall_quality">
                Below Average

            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="overall_quality" name="overall_quality" value="Poor" required>
              <label class="form-check-label" for="overall_quality"> 
                Poor
            </div>
          </div><br>


          
          <div class="form-check mb-3">
            <label class="form-check-label" for="marketing_promotion"> How would you rate the event's marketing and promotion?
            </label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="marketing_promotion" name="marketing_promotion" value="Excellent" required>
              <label class="form-check-label" for="marketing_promotion">Excellent

            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="marketing_promotion" name="marketing_promotion" value="Good" required>
              <label class="form-check-label" for="marketing_promotion">
                Good

              </label>
              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="marketing_promotion" name="marketing_promotion" value="Average" required>
              <label class="form-check-label" for="marketing_promotion">
                Average

              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="marketing_promotion" name="marketing_promotion" value="Below Average" required>
              <label class="form-check-label" for="marketing_promotion">
                Below Average


            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="marketing_promotion" name="marketing_promotion" value="Poor" required>
              <label class="form-check-label" for="marketing_promotion">
                Poor</label>
              </label>
            </div>
          </div><br>
          
         
          <div class="form-check mb-3">
            <label class="form-check-label" for="networking_opportunities">Were there ample opportunities for networking and connecting with others?
            </label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="networking_opportunities" name="networking_opportunities" value="Yes" required>
              <label class="form-check-label" for="networking_opportunities">
                Yes
              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="networking_opportunities" name="networking_opportunities" value="No" required>
              <label class="form-check-label" for="networking_opportunities">
                No
              </label>
            </div>

          </div><br>
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="terms_conditions" name="terms_conditions" required>
            <label class="form-check-label" for="terms_conditions">I agree to the terms and conditions.</label>

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
  $event_name = $_POST['event_name'];
  $recommendation = $_POST['recommendation'];
  $expectations = $_POST['expectations'];
  $valuable_aspects = $_POST['valuable_aspects'];
  $value_for_money = $_POST['value_for_money'];
  $impactful_sessions = $_POST['impactful_sessions'];
  $overall_quality = $_POST['overall_quality'];
  $marketing_promotion = $_POST['marketing_promotion'];
  $networking_opportunities = $_POST['networking_opportunities'];
  $terms_conditions = isset($_POST['terms_conditions']) ? 1 : 0;

  
  $q1 = "SELECT r_id FROM signup WHERE email='$email'";
  $ans2 = mysqli_query($con,$q1);
  $fetchrecord = mysqli_fetch_array($ans2);
  $rid = $fetchrecord['r_id'];

  // You might need to adjust the following lines based on your actual database schema
  $query = "INSERT INTO event_feedback (r_id, event_name, recommend_likelihood, event_expectations, enjoyable_aspects, value_for_investment, impactful_sessions, overall_quality_rating, marketing_rating, networking_opportunities, agreed_terms) 
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

  $statement = mysqli_prepare($con, $query);
  mysqli_stmt_bind_param($statement, "ssssssssss", $rid, $event_name, $recommendation, $expectations, $valuable_aspects, $value_for_money, $impactful_sessions, $overall_quality, $marketing_promotion, $networking_opportunities);

  if (mysqli_stmt_execute($statement)) {
    echo '<script>alert("Feedback submitted successfully.");</script>';
} else {
    echo '<script>alert("Error inserting feedback: ' . mysqli_error($con) . '");</script>';
}

  mysqli_stmt_close($statement);
}

?>
