<?php
//Sample Database Connection Syntax for PHP and MySQL.
include 'sensitive.php';
//Connect To Database
$db=mysqli_connect($hostname,$username, $password,$dbname) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");

if(!$db) {
	//echo"<script>alert('db unselected')</script>";  

}else {
	//echo"<script>alert('db selected')</script>";  
}
?>
