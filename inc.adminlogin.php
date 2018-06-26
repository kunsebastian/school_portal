<?php

include "connection.php";



$name = $_POST['username'];
$pwd = $_POST['pwd'];


if(isset($_POST['submit'])){

$query="SELECT * FROM admin WHERE username='$loginname' AND password='$pwd'";
$result = mysqli_query($conn,$query);
$resultcheck=mysqli_num_rows($result);

if(empty($loginname) or empty($loginpwd)){
	header("location:index.php?Login=empty");
}

if(!$resultcheck==1){
	echo "Login failed, please register";
	header("refresh:1.5; url=register.php");
	exit();
} echo "Login successful";
	header("refresh:1.5; url=views.php");
		
}