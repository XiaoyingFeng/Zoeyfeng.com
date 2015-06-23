<?php  
include 'connect.php';
function randomNumber($length) {
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }

    return $result;
}
$name = $_POST["name"];
$_POST["item"];
$address = $_POST["pickup"];
$destination = $_POST["desitination"];
$today = date("Y-m-d"); 
//echo date("Y-m-d H:i:s");
$id = randomNumber(11);
//echo $id;
//$sql = "INSERT INTO delivery"."(shipDate)". "VALUES ('$today')";
$sql = "INSERT INTO delivery"."(id,name,item,shipDate,pickUpLocation,destination)". "VALUES ('$id','$name','$item' ,'$today','$address','$destination')";
$retval = mysql_query( $sql, $connection );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
} else {
//echo "Entered data successfully\n";
}
?>
