<?php
//Sample Database Connection Syntax for PHP and MySQL.
include 'sensitive.php';
//Connect To Database
$config_sitename="the sample2";
$config_baserul="www.zoeyfeng.com/sample1.php";
$connection=mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
$db=mysql_select_db($dbname,$connection);
if(!$db) {
	echo "db unselected";
}


$result = mysql_query("SELECT * FROM delivery",$connection);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
   
} else {
	$row = mysql_fetch_array($result);
	echo $row[0];
}
// the email value
?>