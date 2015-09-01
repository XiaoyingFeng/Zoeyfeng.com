<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
   header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>  
  


<!DOCTYPE html>
<html>
<head>
<title>sample1.welecom</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="sample1.css">
</head>
 
  
<body>  
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="sample1.php">HOME</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
           <li ><a href="sample1.0.php">New Shipment</a></li>
          <li><a href="#">Shipping Fee</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left" role="search" action="trackNumber0.php" method="post">
            <div class="form-group" >
              <input type="text" class="form-control" placeholder="Tracking#" name="trackNumber">
            </div>
            <button type="submit" class="btn btn-default">Track</button>
          </form>
        </ul>
      </div>
    </div>
  </nav>

<div class="container" >
	<h1>Welcome</h1><br>  
<?php  
echo $_SESSION['email'];  
?>  
    
	<h1><a href="logout.php">Logout here</a> </h1>  

</div>  
</body>  
  
</html>  