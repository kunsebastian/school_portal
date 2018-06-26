<?php

//establish connection
$dbservername= "localhost";
$dbUsername="root";
$dbPassword="";
$dbName="portal";

$conn = @mysqli_connect($dbservername,$dbUsername,$dbPassword,$dbName) or die ("Cannot connect to database");


$fname = $_POST['fname'];
$lname= $_POST['lname'];
$matric= $_POST['matric'];
$password= $_POST['password'];


if(isset($_POST['create'])){

            $sql = "INSERT INTO students (First_Name,Last_Name,Matric,Password) VALUES ('$fname','$lname','$matric','$password')";
            $result = mysqli_query($conn,$sql);

            if(!$result){
                    die("Failed ".mysqli_error($conn)); 
                } echo "SUCCESSFULY ADDED!";
                    header("refresh: 1, url=studentlist.php");
        
}