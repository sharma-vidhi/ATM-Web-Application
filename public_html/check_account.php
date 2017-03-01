<?php
include("header.php");
?>
<?php
$amt=$_REQUEST['ammt'];
$uid=$_SESSION['user'];
$sql = "SELECT * from customer where uid='$uid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$bal = $row['balance'];
$balup=($bal+$amt);
$sql = "UPDATE Customer
		SET balance='$balup'
		WHERE uid='$uid'"; 
$result = $conn->query($sql);
echo "<br><br><br><br><br>";
echo "<fieldset><legend><strong>Amount</strong></legend><center>";
echo "New Balance is ". $balup;
echo "</fieldset></center>";

?>
<?php
include("footer.php");
?>