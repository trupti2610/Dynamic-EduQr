<?php
require 'connection.php';

if (isset($_SESSION['sess_user'])) {
    // Fetch user's name, email, and course title from the session
    $email = $_SESSION['sess_user'];
    $query = "SELECT f_name, course_title FROM signup WHERE email = '$email'"; // Assuming email is unique
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $f_name = $row['f_name'];
        $course_title = $row['course_title'];
    } else {
        // Default values in case of error or no result
        $f_name = "Default Name";
        $course_title = "B.com"; // Default course title
    }
} else {
    // Default values if user is not logged in
    $f_name = "Guest";
    $email = "Guest Email";
    $course_title = "B.com"; // Default course title
}
?>
<div class="mb-3">
    <label for="inputEmail4" class="form-label"> Name</label>
    <input type="text" value="<?php echo $f_name; ?>" disabled>
</div><br>

<div class="mb-3">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" value="<?php echo $email; ?>" disabled>
</div><br>

<div class="mb-3">
    <label class="form-label">Course Title :-</label>
    <select class="form-select" required aria-label="select example" name="course_title" disabled>
        <option value="B.com" <?php if($course_title == 'B.com') echo 'selected'; ?>>B.com</option>
        <option value="B.Tech" <?php if($course_title == 'B.Tech') echo 'selected'; ?>>B.Tech</option>
        <option value="BCA" <?php if($course_title == 'BCA') echo 'selected'; ?>>BCA</option>
        <option value="M.Tech" <?php if($course_title == 'M.Tech') echo 'selected'; ?>>M.Tech</option>
        <option value="B.Sci" <?php if($course_title == 'B.Sci') echo 'selected'; ?>>B.Sci</option>
        <option value="B.Arts" <?php if($course_title == 'B.Arts') echo 'selected'; ?>>B.Arts</option>
    </select>
</div>
<br>
