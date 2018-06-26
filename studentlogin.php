<?php

//establish connection
$dbservername= "localhost";
$dbUsername="root";
$dbPassword="";
$dbName="portal";

$conn = @mysqli_connect($dbservername,$dbUsername,$dbPassword,$dbName) or die ("Cannot connect to database");


$matric = $_POST['matric'];
$pwd = $_POST['pwd'];


if(isset($_POST['login'])){

		session_start();

		$_SESSION['matric'] = $_POST['matric'];


	

		$query="SELECT * FROM students WHERE Matric='$matric' AND Password='$pwd'";
		$result = mysqli_query($conn,$query);
		$resultcheck=mysqli_num_rows($result);

		if(!$resultcheck==1){
			echo "Login details incorrect, please try again";
			header("refresh:1; url=index.php");
			exit();
		} echo "Login successful";
			header("refresh:1; url=classinfo.php");
		
}