<?php
$result = mysql_query("SELECT * FROM delivery",$connection);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
   
} else {
	$row = mysql_fetch_array($result);
	echo $row[0];
}
?>