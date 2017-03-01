<?php
include("header.php");
?>
<html>
<head>
<title>
</title>
<style>
img{
	border-radius: 50%;
}
</style>
</head>
<body><center>
<font color="dodgerblue">
<?php
$uid=$_SESSION['user'];
echo "<br><br><br>";
$sql = "SELECT * FROM customer where uid='$uid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
        echo "<br>name: " . $row["uid"]. "<br>balance: " . $row["balance"]. "<br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
<?php
include("footer.php");
?>