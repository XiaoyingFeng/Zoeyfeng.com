<html>
<body>
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["pickup"]; ?>
<p>Thank you! Submitted successfully.</p>
<?php  
include 'connect.php';
$sql = 'INSERT INTO delivery'.'(name,item,pickUpLocation,destination)'. 'VALUES ("namnama","apple", "new your","ca")';
$retval = mysql_query( $sql, $connection );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
?>
</body>
</html>
