<?php
include("header.php");
?><?php
$amt=$_REQUEST['ammt'];
$uid=$_SESSION['user'];
echo "<br><br><br><br><br>";
echo "<fieldset><legend><strong>Amount</strong></legend><center>";

$sql = "SELECT * from customer where uid='$uid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$bal = $row['balance'];
$a=$amt;
if($amt<$bal){
	$balup=($bal-$amt);
	$sql = "UPDATE Customer
			SET balance='$balup'
			WHERE uid='$uid'"; 
	$result = $conn->query($sql);
	
while($amt!=0)
{
	if($amt>=1000){
		echo "Rs1000" . "<br>";
		$amt=($amt-1000);
	}
	elseif(1000>$amt && $amt>=500){
		echo "Rs500" . "<br>";
		$amt=($amt-500);
	}
	elseif(500>$amt && $amt>=100){
		echo "Rs100" . "<br>";
		$amt=($amt-100);
	}
	elseif(100>$amt && $amt>=50){
		echo "Rs50" . "<br>";
		$amt=($amt-50);
	}
	elseif(50>$amt && $amt>=10){
		echo "Rs10" . "<br>";
		$amt=($amt-10);
	}
	else
	{
		echo "invalid amount";
		echo $amt;
	}
}
echo "Remaining Balance is ". $balup;
}
else{
	echo "Not Enough Balance";
	
}
echo "</fieldset></center>";

?>
<?php
include("footer.php");
?>