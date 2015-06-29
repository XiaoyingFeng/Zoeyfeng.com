<?php  
include 'connect.php';
function randomNumber($length) {
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }

    return $result;
}

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
  
}
echo "in insert.php";
$name = $_POST["name"];
$item = $_POST["item"];
$address = $_POST["pickup"];
$destination = $_POST["desitination"]; 
if($name ==null || $item == null || $address == null || $destination == null) {
	echo '<script language="javascript"> alert("Please fill out this form completely") </script>';
} else {
	$today = date("Y-m-d"); 
	//echo date("Y-m-d H:i:s");
	// check the id duloicate
	$id = randomNumber(11);
	//echo $id;
	//$sql = "INSERT INTO delivery"."(shipDate)". "VALUES ('$today')";
	$sql = "INSERT INTO delivery"."(id,name,item,shipDate,pickUpLocation,destination)". "VALUES ('$id','$name','$item' ,'$today','$address','$destination')";
	$retval = mysql_query( $sql, $connection );
	if(! $retval )
	{
	  die('Could not enter data: ' . mysql_error());
	} else {
		redirect('sample1.html');
	//echo "Entered data successfully\n";
	}
}
?>
