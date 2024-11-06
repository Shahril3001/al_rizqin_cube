<html>
<head>
<title>Registration Process</title>
<link href="css/.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
include 'connection.php';
session_start();

$vname = $_POST['vname'];
$vicnumber = $_POST['vicnumber'];
$vhome = $_POST['vhome'];
$vcontact = $_POST['vcontact'];
$vsocial = $_POST['vsocial'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];


$query= mysql_query ("SELECT * FROM vendor WHERE vicnumber='$vicnumber'");

if (mysql_num_rows($query) !=0)
{
echo "<center>";
echo "<h2>User Account Are Already Exists!</h2>"	;
echo "</p>";
echo "</p>";	
echo "<h3>If this you, please click <a href ='login.html' style='color:blue';><input type='button' value='Login'/></a> to continue.<h3>";	
echo "</p>";
echo "<h3>Otherwise click <a href='register.html' style='color:blue';><input type='button' value='Register'/></a> to go back and register yourself again.<h3>";	
echo "</center>";
}
else
{
if($password == $cpassword)
{
		
mysql_query ("INSERT into vendor (vendorID,vname,vicnumber,vhome,vcontact,vsocial,password)
VALUES ('','".$vname."','".$vicnumber."','".$vhome."','".$vcontact."','".$vsocial."','".$password."')")or die(mysql_error());
echo "<center>";
echo "<h2>Registration Successful</h2>";
echo "</br>";
echo "<p></p>";
echo "<h3>To continue, please click button login below.</h3></a>";
echo "<p></p>";
echo "<p><a href='login.html'><input type='button' name='login' value='Login'/></p>";
echo "</center>";

}
else
{
echo "The password don't match";
}
}
?>
</body>
</html>