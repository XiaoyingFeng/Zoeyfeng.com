
<!DOCTYPE html>
<html>
<head>
<title>sample1.admin</title>
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
          <li class="active"><a href="registration.php">Registration/Login<span class="sr-only">(current)</span></a></li>

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
  
  <div class="container">  
      <div class="row">  
          <div class="col-md-4 col-md-offset-4">  
                <div class="panel-heading">  
                      <h3 class="panel-title">Admin Sign In</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="admin_login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">  
                            </div>  


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" >  


                        </fieldset>  
                      </form>  
                </div>  
          </div>  
      </div>  
  </div>  
  
  
</body>  
  
</html>  
  
<?php  
/** 
 * Created by PhpStorm. 
 * User: Ehtesham Mehmood 
 * Date: 11/24/2014 
 * Time: 3:26 AM 
 */  
include("database/db_conection.php");  
  
if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.  
{  
    $admin_name=$_POST['admin_name'];  
    $admin_pass=$_POST['admin_pass'];  
  
    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
  
    $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
  
        echo "<script>window.open('view_users.php','_self')</script>";  
    }  
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
  
}  
  
?>  