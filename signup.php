<?php require 'connection.php';?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EduQR</title>
   

    <!-- Favicons -->
    <link href="img/icons8-qr-code-scan-68.png" rel="icon">
    <link href="img/icons8-qr-code-scan-68.png" rel="icons8-qr-code-scan-68">

    <!-- Google Fonts -->
     <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-example">

    <div id="preloader"></div>

    <!-- Start About area -->
    <div id="about" class="about-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2 style="margin-top: 50px;">Sign Up Here!</h2>
                    </div>
                </div>
            </div>

            <form class="was-validated" method="POST">
                <div class="mb-3">
                    <label for="inputEmail4" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="full_name" required>
                </div><br>
                <div class="mb-3">
                    <label for="inputEmail4" class="form-label">Email (College Id)</label>
                    <input type="email" class="form-control" name="email" required>
                </div><br>
                <div class="mb-3">
                    <label for="inputEmail4" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" required>
                </div><br>
                <div class="mb-3">
                    <label class="form-label">Course Title</label>
                    <select class="form-select" name="course_title" required>
                        <option value="B.com">B.com</option>
                        <option value="B.Tech">B.Tech</option>
                        <option value="BCA">BCA</option>
                        <option value="M.Tech">M.Tech</option>
                        <option value="B.Sci">B.Sci</option>
                        <option value="B.Arts">B.Arts</option>
                    </select>
                </div>
                <br>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit" name="submit">Sign Up EduQR</button>
                </div>
                <div class="mb-3"><br>
                    <p>Already have an account? <a href="login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <!-- End About area -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $course_title = $_POST['course_title'];

    // Sanitize inputs to prevent SQL injection
    $name = mysqli_real_escape_string($con, $name);
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password);
    $course_title = mysqli_real_escape_string($con, $course_title);

    // Hash password for security
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO signup (f_name, email, password, course_title) VALUES ('$name','$email','$password','$course_title')";
    $sql = mysqli_query($con, $query);

    if($sql){
        echo '<script>alert("Successfully inserted");</script>';
        // echo 'Successfully inserted';
    } else {
        echo '<script>alert("Something went wrong");</script>';
        // echo 'Something went wrong';
    }
}
?>
