<!DOCTYPE html>
<html>
<head>
<title>sample1</title>
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
          <li><a href="#">Shipping Fee</a></li>
          <li ><a href="registration.php">Registration/Login</a></li>
          <li class="active"><a href="sample1.newshipment.php ">New Shipment<span class="sr-only">(current)</span></a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left" role="search" action="trackNumber.php" method="post">
            <div class="form-group" >
              <input type="text" class="form-control" placeholder="Tracking#" name="trackNumber">
            </div>
            <button type="submit" class="btn btn-default">Track</button>
          </form>
        </ul>
      </div>
    </div>
  </nav>

  <!-- information input form -->
  <div class="container">
    <div class="form">  
      <form action="sample1.0.php" method="post">
        <div class="form-group" id="litterForm">
          <label for="usr">Fedex#:</label>
          <input type="text" class="form-control" name="fedex">
        </div>    
        <div class="form-group" id="litterForm" >
          <label >Item:</label>
          <select class="form-control" name="item">
            <option>Book</option>
            <option>Clothing, Shoes & Jewelry</option>
            <option>Electronics</option>
            <option>Health & Personal Care </option>
            <option>Sport & Outdoor</option>
            <option>Other</option>
          </select>
        </div>
        <div class="form-group"  class="litterForm">
         <div class="form-group" id="litterForm" >
          <label >Pick Up Address:</label>
          <input type="text" class="form-control" name="pickup" placeholder="Montain View,CA">
        </div>
        <div class="form-group"  id="litterForm">
          <label >Destination:</label>
          <input type="text" class="form-control"name="desitination" placeholder="Brooklyn,New York City">
        </div>
        <div class="form-group"  id="litterForm">
          <button type="submit"class="btn btn-default">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <footer>
    <p>&copy; 2015 Xiaoying Feng </p>
  </footer>

  <?php include 'sample1.detectFromInput.php';?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
   
  <script src="sample1.js"></script>
</body>

</html>
