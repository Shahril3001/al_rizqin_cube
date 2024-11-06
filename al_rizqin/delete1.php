<!DOCTYPE html>
<html>
<head>
<title>Delete Product</title>
<link rel="stylesheet" type="text/css" href="style4.css"/>
</head>
<body>
<?php
include 'connection1.php';
if (isset($_GET['orderID']))
{
	$orderID =$_GET['orderID'];
	$query1=mysql_query("SELECT from booking where orderID='$orderID'");
	$query2=mysql_fetch_array($query1);
	$query3=mysql_query("DELETE from booking where orderID='$orderID'");
	If ($query3)
	{
		?>
		<script>alert('Delete successful.');</script>
	<?php
	header('Location:index1.php');
	}
	else{echo "<img src='How+About+No.jpg' alt='How about NO.'/>";}
}
?>
</body>
</html>