<?php
	include 'connection.php';
?>
<?php
	session_start();
	$a = $_SESSION['sess_user'];
	
	$query = ("SELECT * FROM signup WHERE email = '".$a."'");//query
	$run = mysqli_query($con,$query);//run query
	$value = mysqli_fetch_array($run);//fetch Array
?>

<!DOCTYPE html>
	<head>
	
	</head>
	<body>
		<h1> Welcome <?php echo $value["f_name"];?></h1>
		<h2><a href="logout.php">LOGOUT</a></h2>
	</body>
</html>