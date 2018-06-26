<?php

//establish connection
$dbservername= "localhost";
$dbUsername="root";
$dbPassword="";
$dbName="portal";

$conn = @mysqli_connect($dbservername,$dbUsername,$dbPassword,$dbName) or die ("Cannot connect to database");


$course_code = $_POST['course_code'];
$course_title= $_POST['course_title'];
$lecturer= $_POST['lecturer'];
$lecture_notes= $_POST['lecture_notes'];
$assignment= $_POST['assignment'];


if(isset($_POST['create'])){

     $sql = "INSERT INTO info (course_code,course_title,lecturer,lecture_notes,assignment) VALUES ('$course_code','$course_title','$lecturer','$lecture_notes','assignment')";
            $result = mysqli_query($conn,$sql);

            if(!$result){
                    die("Failed ".mysqli_error($conn)); 
                } echo "SUCCESSFULY ADDED!";
                    header("refresh: 1, url=classinfo.php");
        
}