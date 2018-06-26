
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Student Login</title>
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
        
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
              <li class="active"><a id="link1" href="#student">Student</a></li>
              <li><a id="link2" href="admin.php">Admin</a></li>
            </ul>
        </div>
          
        </div>
      </nav>

    <div class="container">
          <h2 class="text-center">MIT II ONLINE PORTAL</h2>
          <img class = "center-block" src="images/logo.jpg">
     
      <form class="form-signin" action="studentlogin.php" method="POST">
        
        <input type="text" id="matricnum" class="form-control" placeholder="Matric Number" name="matric" required autofocus>
        
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pwd" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Login</button>

      </form>
   
    </div> 
    <footer class="row col-md-12"> 
        <div class="footer-copyright text-center"> 
            <a href="#"> Kunle Badeafuye </a> |169074181| © 2018 
        </div>
  </footer>
  </body>
</html>
