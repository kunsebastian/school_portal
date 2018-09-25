
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Create Student</title>
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
              <li><a style="color: #000" id="link1">Welcome <?php echo $name; ?></a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
          
        </div>
      </nav>

    <div class="container">
        <div class="row">
          <div class="form-group">
            <div class="col-lg-6">
                  <h2>Create new Student</h2><br>
                    
                    <form action="inc.create.php" method="POST">
                          <div class="form-group">
                            <label for="fname">First Name:</label>
                            <input type="text" class="form-control" id="fname" name="fname" required>
                          </div>
                          <div class="form-group">
                            <label for="lname">Last Name:</label>
                            <input type="text" class="form-control" id="lname" name="lname" required>
                          </div>
                          <div class="form-group">
                            <label for="matric">Matric Number:</label>
                            <input type="text" class="form-control" id="matric" name="matric" required>
                          </div>
                          <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="text" class="form-control" id="pwd" name="password" required>
                          </div>
                          
                          <button class="btn btn-primary" name = "create" type="submit">Create</button>
                    </form>
            </div>
          </div>
        </div>
      </div>
          
     
      
    </div> 
    <footer class="row col-md-12"> 
        <div class="footer-copyright text-center"> 
            Copyright © 2018 <a href="#"> Kunle Badeafuye </a>  
        </div>
  </footer>
  </body>
</html>
