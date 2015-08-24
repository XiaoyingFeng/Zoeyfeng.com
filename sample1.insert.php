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
 	$sql = "INSERT INTO delivery"."(name,item,shipDate,pickUpLocation,destination)". "VALUES ('$name','$item' ,'$today','$address','$destination')";
	//$last = mysqli_query("SELECT last_insert_id()");
	//$last = $last["id"];
	//$last="sfdsfas";
	$retval = mysqli_query( $db, $sql);
	$last=mysqli_insert_id($db);

	
	if(! $retval )
	{
	  die('Could not enter data: ' . mysql_error());
	} else {
		//echo mysqli_query("SELECT LAST_INSERT_ID()");
		mysqli_close();
		//redirect('sample1.2.php');
		//echo alert;
		redirect('sample1.2.php?id=' . $last);
	//echo "Entered data successfully\n";
	}
}
?>
