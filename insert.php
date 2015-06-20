<html>
<p>hhhhhhhhhhh</p>
<?php
include 'connect.php';
 console.log( insrt php);
 $sql = "INSERT INTO delivery (name, item, pickUpAdress)
VALUES ('John', 'apple', 'here')";

if ($connenction->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$udxarr = json_decode(str_replace('\\', '', $_POST['newOrder']));
?>
</html>