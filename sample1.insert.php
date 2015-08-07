<?php  
include 'connect.php';

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
  
}
//echo "in insert php";
$name = $_POST["name"];
$item = $_POST["item"];
$address = $_POST["pickup"];
$destination = $_POST["desitination"]; 
if($name ==null || $item == null || $address == null || $destination == null) {
	echo '<script language="javascript"> alert("Please fill out this form completely") </script>';
} else {
	date_default_timezone_set('America/New York');
	$today = date("Y-m-d"); 
	//echo date("Y-m-d H:i:s");
	// check the id duloicate
	//echo '<script language="javascript"> alert("in side the inssering") </script>';
	//echo $id;
	//$sql = "INSERT INTO delivery"."(shipDate)". "VALUES ('$today')";
	$sql = "INSERT INTO delivery"."(name,item,shipDate,pickUpLocation,destination)". "VALUES ('$name','$item' ,'$today','$address','$destination')";
	$retval = mysqli_query( $db, $sql);
	if(! $retval )
	{
	  die('Could not enter data: ' . mysql_error());
	} else {
		mysqli_close();
		redirect('sample1.2.php');
	//echo "Entered data successfully\n";
	}
}
?>
