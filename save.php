<?php
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "kunal";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
include("conn.php");
$p1=$_REQUEST["N"];
$p2=$_REQUEST["E"];
$p5=$_REQUEST["M"];
$p3=$_REQUEST["pwd"];
$p4=$_REQUEST["add"];
mysqli_query($conn,"insert into dapid values('$p1','$p2','$p5','$p3','$p4')");

?>

<html>
<body bgcolor="#4169E1">
<center>
<br><br><br><br><br><br><br><br>
<font size="40" color="yellow">
Successfully Registered!<br><br>
<a href="login.html" target="f2">Click Here to LOGIN</a>
</center>
</font>
</body>
</html>
