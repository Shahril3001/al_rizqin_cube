<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Connection</title>
</head>

<body>
<?php
$host="localhost";
$dbuser="user";
$dbpassword="1234";
$dbname="al_rizqin";

mysql_connect("$host", "$dbuser", "$dbpassword")
or die("cannot connect");

mysql_select_db("$dbname")
or die("cannot select DB");


?>
</body>
</html>