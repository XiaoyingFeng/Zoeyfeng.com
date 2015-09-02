<?php  
include 'connect.php';

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
  
}
//echo "in insert php";
$fedex = $_POST["fedex"];
$item = $_POST["item"];
$address = $_POST["pickup"];
$destination = $_POST["desitination"]; 
if($fedex ==null || $item == null || $address == null || $destination == null) {
	echo '<script language="javascript"> alert("Please fill out this form completely") </script>';
} else {
	date_default_timezone_set('America/New York');
	$today = date("Y-m-d"); 
	//echo date("Y-m-d H:i:s");
	// check the id duloicate
 	$sql = "INSERT INTO delivery"."(fedex,item,shipDate,pickUpLocation,destination)". "VALUES ('$fedex','$item' ,'$today','$address','$destination')";
	
	$retval = mysqli_query( $db, $sql);
	$last=mysqli_insert_id($db);

	
	if(! $retval )
	{
	  die('Could not enter data: ' . mysql_error());
	} else {
		mysqli_close();
		
		redirect('sample1.2.php?id=' . $last);
	}
}
?>
