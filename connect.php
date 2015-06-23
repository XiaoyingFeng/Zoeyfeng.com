<?php
//Sample Database Connection Syntax for PHP and MySQL.
include 'sensitive.php';
//Connect To Database
$connection=mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
$db=mysql_select_db($dbname,$connection);
if(!$db) {
	//echo "db unselected";
}else {
	//echo "db selected";
}
?>
