<?php
include("header.php");
?><html>
<head>
</head>
<body><br><br><br><br><br>
<fieldset><legend><strong>Welcome <?php echo $_SESSION["user"];?>!</strong></legend><form method="post" action="check_account.php"><center>
Please enter amount you want to deposit<br><br><input id="ip" type="number" name="ammt"></input><br><br>
<input type="submit" value="submit"></input>
</form></fieldset></body>
</html>
<?php
include("footer.php");
?>