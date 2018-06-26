
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Add Class Information</title>
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
            <a class="navbar-brand" href="index.php">MIT II INFORMATION PORTAL</a>
          </div>

          <?php 

                session_start();

                $matric =  $_SESSION['matric'];

                if(isset($_SESSION) ){
                        if(!$_SESSION['matric']){
                                header("Location:index.php?id=access_forbidden");
                        }
                }else{
                header("Location:index.php?id=access_forbidden");
                }
               
        ?>
        
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a style="color: #000" id="link1">Welcome <?php echo $matric; ?></a></li>
              <li><a href="studentlogout.php">Logout</a></li>
            </ul>
        </div>
          
        </div>
      </nav>

    <div class="container">
        <div class="row">
          <div class="form-group">
            <div class="col-lg-6">
                  <h2>Add Class Information</h2><br>
                    
                    <form action="inc.addinfo.php" method="POST">
                          <div class="form-group">
                            <label for="course_code">Course Code:</label>
                            <input type="text" class="form-control" id="course_code" name="course_code" required>
                          </div>
                          <div class="form-group">
                            <label for="course_title">Course Title:</label>
                            <input type="text" class="form-control" id="course_title" name="course_title" required>
                          </div>
                          <div class="form-group">
                            <label for="lecturer">Lecturer:</label>
                            <input type="text" class="form-control" id="lecturer" name="lecturer" required>
                          </div>
                          <div class="form-group">
                            <label for="lecture_notes">Lecture notes:</label>
                            <input type="text" class="form-control" id="lecture_notes" name="lecture_notes" required>
                          </div>
                          <div class="form-group">
                            <label for="assignment">Assignment:</label>
                            <input type="text" class="form-control" id="assignment" name="assignment">
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
            <a href="#"> Kunle Badeafuye </a> |169074181| © 2018 
        </div>
  </footer>
  </body>
</html>
