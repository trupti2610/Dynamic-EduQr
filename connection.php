<?php
	//1 connect to the server
	$con = mysqli_connect('localhost','root','');
	if(!$con){
		echo 'Not connected to server</br>';
	}
	//2 connect to database
	
	$db = mysqli_select_db($con,'eduqr');
	if(!$db){
		echo 'Not Connected To the database';
	}
?>