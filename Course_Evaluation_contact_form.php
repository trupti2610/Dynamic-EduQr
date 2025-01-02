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
            <h2>Course Evaluation Feedback Form</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <form class="was-validated" method="post">
        <?php
        include 'name_email.php';
        ?>


          <div class="mb-3">
            <label for="validationTextarea" class="form-label">What did you like about the course content?</label>
            <textarea class="form-control is-invalid" id="validationTextarea" name="liked_content" required></textarea>

          </div><br>
          <div class="mb-3">
            <label for="validationTextarea" class="form-label">What did you dislike about the course content? </label>
            <textarea class="form-control is-invalid" id="validationTextarea" name="disliked_content" required></textarea>

          </div><br>
         
          <div class="form-check mb-3">
            <label class="form-check-label" for="validationFormCheck1">How relevant was the course content to your
              needs?</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="relevance" value="Not relevant at all" required>
              <label class="form-check-label" for="validationFormCheck2">Not relevant at all</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input"  name="relevance" value="Slightly relevant" required>
              <label class="form-check-label" for="validationFormCheck3">Slightly relevant</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" name="relevance" value="Moderately relevant" required>
              <label class="form-check-label" for="validationFormCheck3">Moderately relevant</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" name="relevance" value="Very relevant" required>
              <label class="form-check-label" for="validationFormCheck3">Very relevant
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" name="relevance" value="Extremely relevant" required>
              <label class="form-check-label" for="validationFormCheck3">Extremely relevant</label>
              </label>
            </div>
          </div><br>

          <div class="form-check mb-3">
            <label class="form-check-label" for="validationFormCheck1">How knowledgeable was the instructor?</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="validationFormCheck2" name="instructor_knowledge"  value="Not knowledgeable at all"  required>
              <label class="form-check-label" for="validationFormCheck2" value="Not knowledgeable at all">Not knowledgeable at all
</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="validationFormCheck3" name="instructor_knowledge"  value="Slightly knowledgeable" required>
              <label class="form-check-label" for="validationFormCheck3">
                Slightly knowledgeable
                </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="validationFormCheck3" name="instructor_knowledge" value="Moderately knowledgeable"  required>
              <label class="form-check-label" for="validationFormCheck3">
                Moderately knowledgeable
                </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="validationFormCheck3" name="instructor_knowledge" value="Very knowledgeable"  required>
              <label class="form-check-label" for="validationFormCheck3">
                Very knowledgeable
                
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="validationFormCheck3" name="instructor_knowledge" value="Extremely knowledgeable"  required>
              <label class="form-check-label" for="validationFormCheck3">
                Extremely knowledgeable
            </div>
          </div><br>
          <div class="form-check mb-3">
            <label class="form-check-label" for="validationFormCheck1">How engaging was the instructor?
</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="validationFormCheck2" name="instructor_engagement" value="Not engaging at all" required>
              <label class="form-check-label" for="validationFormCheck2">Not engaging at all
</label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="validationFormCheck3" name="instructor_engagement" value="Slightly engaging" required>
              <label class="form-check-label" for="validationFormCheck3">
                Slightly engaging
               </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="validationFormCheck3" name="instructor_engagement" value="Moderately engaging" required>
              <label class="form-check-label" for="validationFormCheck3"> 
                Moderately engaging
               </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="validationFormCheck3" name="instructor_engagement" value="Very engaging" required>
              <label class="form-check-label" for="validationFormCheck3"> 
                Very engaging
               
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="validationFormCheck3" name="instructor_engagement" value="Extremely engaging" required>
              <label class="form-check-label" for="validationFormCheck3"> 
                Extremely engaging</label>
              </label>
            </div>
          </div><br>
          <div class="mb-3">
            <label for="validationTextarea" class="form-label">What did you like about the instructor?</label>
            <textarea class="form-control is-invalid" id="validationTextarea" name="liked_instructor"
              required></textarea>

          </div><br>
          <div class="mb-3">
            <label for="validationTextarea" class="form-label">What did you dislike about the instructor? </label>
            <textarea class="form-control is-invalid" id="validationTextarea" disliked_instructor  required></textarea>

          </div><br>
          <div class="form-check mb-3">
            <label class="form-check-label" for="validationFormCheck1">How satisfied were you with the logistics of the training?
</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="validationFormCheck2" name="training_satisfaction" value=" Very dissatisfied" required>
              <label class="form-check-label" for="validationFormCheck2">
                Very dissatisfied
                </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="validationFormCheck3" name="training_satisfaction" value="Somewhat dissatisfied" required>
              <label class="form-check-label" for="validationFormCheck3">
                Somewhat dissatisfied
                </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="validationFormCheck3" name="training_satisfaction" value="Neither satisfied nor dissatisfied" required>
              <label class="form-check-label" for="validationFormCheck3">
                Neither satisfied nor dissatisfied
                </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="validationFormCheck3" name="training_satisfaction" value="Somewhat satisfied" required>
              <label class="form-check-label" for="validationFormCheck3">
                Somewhat satisfied
              
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="validationFormCheck3" name="training_satisfaction" value="Very satisfied" required>
              <label class="form-check-label" for="validationFormCheck3">  
                Very satisfied</label>
              </label>
            </div>
          </div><br>
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="validationFormCheck1" name="terms_accepted" required>
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
  $liked_content = $_POST['liked_content'];
  $disliked_content = $_POST['disliked_content'];
  $relevance = $_POST['relevance'];
  $instructor_knowledge = $_POST['instructor_knowledge'];
  $instructor_engagement = $_POST['instructor_engagement'];
  $liked_instructor = $_POST['liked_instructor'];
  $disliked_instructor = isset($_POST['disliked_instructor']) ? $_POST['disliked_instructor'] : ''; // Check if the field is set
  $training_satisfaction = $_POST['training_satisfaction'];
  $terms_accepted = isset($_POST['terms_accepted']) ? 1 : 0;

  $q1 = "SELECT r_id FROM signup WHERE email='$email'";
  $ans2 = mysqli_query($con,$q1);
  $fetchrecord = mysqli_fetch_array($ans2);
  $rid = $fetchrecord['r_id'];


  // Insert data into the database
  $query = "INSERT INTO course_feedback (r_id, liked_content, disliked_content, relevance, instructor_knowledge, instructor_engagement, liked_instructor, disliked_instructor, training_satisfaction, terms_accepted) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

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
