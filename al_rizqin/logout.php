<html>
<head>
<title>Log Out</title>
</head>
<body>

<?php
include 'connection.php';
$vname=$_GET['vname'];
$sql="UPDATE vendor SET last_login=now() WHERE vname='".$vname."'";
mysql_query($sql);
session_start();
session_unset();
session_destroy();
header("location:index.html");
exit();
?>
</body>
</html>