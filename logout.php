<?php
	session_start();
	unset($_SESSION['sess_user']);//email show thay 6
	session_destroy();
	header('Location:login.php');
?>