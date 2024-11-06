<! DOCTTYPE html>

<html>
<head>
<title>Validate Form</title>
</head>

<body>
<?php
include 'connection.php';

$myvname=$_POST['vname'];
$mypassword=$_POST['password'];

$myvname = stripslashes($myvname);
$mypassword = stripslashes($mypassword);

$myvname = mysql_real_escape_string($myvname);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM vendor WHERE vname ='".$myvname."' and password ='".$mypassword."'";
$result= mysql_query($sql);
$count= mysql_num_rows($result);

	if($count==1)
	{
		session_start();
		$_SESSION["vname"] = $myvname;
		$_SESSION["password"] = $password;
		header("location:index2.php?vname=".$myvname."");
	}


	else
	{
		echo "<center>";
		echo "Wrong username or Password";
		echo "</center>";
		header("location:login.html");
		
	}
	
?>
</body>
</html>