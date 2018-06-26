<?php

	session_start();

	if (isset($_SESSION['matric'])){

		$_SESSION = array();
		session_destroy();

		echo "Logged out successfully";
		header("refresh:1; url=index.php");
	}else{
		echo "Logged out successfully";
		header("refresh:1; url=index.php");
	}

	?>
