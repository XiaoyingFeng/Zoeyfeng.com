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
        <li ><a href="sample1.0.php">New Shipment <span class="sr-only">(current)</span></a></li>
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

<!--main body , display the table-->
<div class="container" >
  <div class="detail_tile" style="background color: #ffffaf";>
    <h2>ID#  <?php include 'connect.php';
    $trackNumber = $_POST["trackNumber"];
    //echo $trackNumber;
    //echo "Escaping characters is done \"Like this\".";
     echo "<a href=\"https://www.fedex.com/apps/fedextrack/?action=track&action=track&tracknumbers=". $trackNumber. "\">".$trackNumber."</a>";?>  
 </h2>
  </div> 
  <div class="row">
    <div class="col-xs-4">
      <p> Ship Date:</p>
      <p style="border-bottom-style: ridge;"}>
      <?php 
        $query="SELECT * FROM delivery where id = $trackNumber";
        if($result=mysqli_query($db,$query)) {
          $row=mysqli_num_rows($result);
          if($row == 0){
            echo "No rows found, nothing to print so am existing"; 
          } else {
            $row= mysqli_fetch_assoc($result);
            echo $row["shipDate"];
           //mysqli_free_result($result);
          }
        }
       ?>
       </p>
       <p><?php echo $row["pickUpLocation"];?></p>
    </div>
   <div class="col-xs-4">
      <p>item</p>
      <p><?php
        echo $row["item"];?></p>
   </div>
   <div class="col-xs-4">
      <p>Delivery Date:</p>
      <p style="border-bottom-style: ridge;"><?php echo $row["deliveryDate"];?></p>
      <p><?php echo $row["destination"];?></p>
   </div>
  </div>                                                           
  <div class="travel-history" style="border-bottom-style: ridge;">
    <h4>Travel History</h4>
  </div>
  <div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        08/07/2015-Friday
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
         <div class="row">
            <div class="col-md-2">10:06 am</div>
            <div class="col-md-8">Delivered</div>
            <div class="col-md-2">NEW YORK, NY </div>
         </div>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Collapsible Group Item #2
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
        Anim pariatur cliche...
      </div>
    </div>
  </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 
</body>
</html>
