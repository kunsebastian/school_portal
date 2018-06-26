<?php

//establish connection
$dbservername= "localhost";
$dbUsername="root";
$dbPassword="";
$dbName="portal";

$conn = @mysqli_connect($dbservername,$dbUsername,$dbPassword,$dbName) or die ("Cannot connect to database");


$name = $_POST['username'];
$pwd = $_POST['pwd'];



if(isset($_POST['login'])){

		session_start();

		$_SESSION['username'] = "admin";

		$query="SELECT * FROM admin WHERE username='$name' AND password='$pwd'";
		$result = mysqli_query($conn,$query);
		$resultcheck=mysqli_num_rows($result);

		if(empty($loginname) or empty($loginpwd)){
			header("refresh:1; url=views.php");
		}

		if(!$resultcheck==1){
			echo "Login details incorrect, please contact the admin";
			header("refresh:1; url=admin.php");
			exit();
		} echo "Login successful";
			header("refresh:1; url=studentlist.php");
		
}