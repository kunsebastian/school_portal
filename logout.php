<?php

	session_start();

	if (isset($_SESSION['username'])){

		$_SESSION = array();
		session_destroy();

		echo "Logged out successfully";
		header("refresh:1; url=admin.php");
	}else{
		echo "Logged out successfully";
		header("refresh:1; url=admin.php");
	}
