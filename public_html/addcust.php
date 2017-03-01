<?php
include("header.php");
?>
<?php
$uid=$_REQUEST['uid'];
$pass=$_REQUEST['pass'];
$bal=$_REQUEST['bal'];

$sql = "INSERT INTO customer(uid, pass, balance) VALUES ('$uid', '$pass', '$bal')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>