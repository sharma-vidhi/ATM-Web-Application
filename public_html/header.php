<!DOCTYPE html>
<html>
<head>
<title>ATM</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
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
?>

</head>
<body>

<ul>
	<li><a href="main.php">Home</a></li>
	<li><a href="withdraw.php">Cash Withdraw</a></li>
	<li><a href="deposit.php">Cash Deposit</a></li>
	<li><a href="accdet.php">Account Details</a></li>
	<li><a href="about.php">About</a></li>
	<li id="login"><a href="login.php">Logout</a></li>

</ul>

</body>
</html>