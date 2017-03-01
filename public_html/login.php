<html>
<head>
<title></title>
<style>
body{
	background: url("imgs/b1.png");
	background-position: center;
	background-size: 1500px 850px;
	background-repeat: no-repeat;
    background-attachment: fixed;
	}
.ip{
	color:transparent;
}
</style>
</head>
<body><br><br><br><br><br>
<fieldset><legend><strong>Welcome User! Please Login:</strong></legend><center>
<form action="check.php" method="post">
User_Id:<input id="ip" type="text" name="uid"></input><br>
Password:<input id="ip" type="password" name="pass"></input><br>
<input type="submit" value="submit"></input>
</center></form></fieldset>
</body>
</html>
<?php
include("footer.php");
?>