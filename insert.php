
<?php
include 'connect.php';
error_log =/home/zoeyfeng/public_html/php_error.log;
$sql = "INSERT INTO delivery (name, item, pickUpAddress) VALUES ('John', 'apple', 'here')";
if ($connenction->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};
?>
