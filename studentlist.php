<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Student List</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>
      <div class="container-fluid col-md-12">
      <nav id="main-nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">ASSIGNMENT MANAGEMENT SYSTEM</a>
          </div>

<?php 

                session_start();

                $name =  $_SESSION['username'];
                


                if(isset($_SESSION) ){
                        if(!$_SESSION['username']=='admin'){
                                header("Location:admin.php?id=access_forbidden");
                        }
                }else{
                header("Location:admin.php?id=access_forbidden");
                }
               


?>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
              <li><a style="color: #000" id="link1">Welcome (<?php echo $name; ?>)</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
          
        </div>
      </nav>

    <div class="container">
          <h2 class="text-center">Student List</h2>
      <br>
      <form action="create_student.php"><button class="btn btn-primary">Create Student</button></form>
      
      <table class="table table-striped table-bordered">
    <thead>
              
      <tr>
        <th>S/N</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Matric Number</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <?php 



                $dbservername= "localhost";
                $dbUsername="root";
                $dbPassword="";
                $dbName="portal";

                $conn = @mysqli_connect($dbservername,$dbUsername,$dbPassword,$dbName) or die ("Cannot connect to database");

                $sql = "SELECT * FROM students";
                $result = mysqli_query($conn,$sql);

          $i = 1; 
          while ($row = mysqli_fetch_array($result)){ ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['First_Name'];?></td>
        <td><?php echo $row['Last_Name'];?></td>
        <td><?php echo $row['Matric'];?></td>
        <td><?php echo $row['Password'];?></td>
      </tr>
    </tbody>
    <?php $i++; } ?>
  </table>




    </div> 
    <footer class="row col-md-12"> 
        <div class="footer-copyright text-center"> 
            Copyright © 2018 <a href="#"> Kunle Badeafuye </a> 
        </div>
  </footer>
  </body>
</html>
