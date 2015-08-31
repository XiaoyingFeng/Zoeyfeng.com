<!DOCTYPE html>
<html>
<head>
<title>sample1.registration</title>
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

<!--retisration ->
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
<div class="container">    
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
            <!--<div class="login-panel panel panel-success">  -->
                <div class="panel-heading">  
                    <h3 class="panel-title">Registration</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="registration.php" novalidate>  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Username" name="name" type="text" >  
                            </div>  
  
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" >  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
  
                        </fieldset>  
                    </form>  
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->  
                </div>  
           <!-- </div> --> 
        </div>  
    </div>  
</div>  
</body>   
</html>  
  
<?php  
  
include 'connect.php';//make connection here  
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
  
}
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
    $user_pass=$_POST['pass'];//same  
    $user_email=$_POST['email'];//same  
  
  
    if($user_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
        exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="SELECT * FROM users WHERE user_email = $user_email";
    $run_query=mysqli_query($db,$check_email_query);  
    
    if(mysqli_num_rows($run_query)>0)  
    {  
        echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";         
        exit();  
    }  
//insert the user into the database.  
    $insert_user="INSERT INTO users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
    if(mysqli_query($db,$insert_user))  
    {  
       echo"<script>alert('reday to open window')</script>";  
       redirect('welcome.php');
       //echo"<script>window.open('http://www.google.com')</script>";  
    }  
  
  
  
}  
  
?>  