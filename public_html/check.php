<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
$uid=$_REQUEST['uid'];
$pass=$_REQUEST['pass'];

$sql = "SELECT pass from customer where uid='$uid'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($pass = $row["pass"]){
		$_SESSION["user"] = $uid;
		header("location: main.php");
		}
else {
		echo "Error: " ;
	}
$conn->close();
?>