<!DOCTYPE html>
<html>
<head>
<title>Delete Payment</title>
</head>
<body>
<?php
include 'connection.php';
if (isset($_GET['vendorID']))
{
	$vendorID =$_GET['vendorID'];

{
	$query1=mysql_query("SELECT from vendor where vendorID='$vendorID'");
	$query2=mysql_query("DELETE from vendor where vendorID='$vendorID'");
	$query3=mysql_query("SELECT from booking where vendorID='$vendorID'");
	$query4=mysql_query("DELETE from booking where vendorID='$vendorID'");

		?>
		<script>alert('Delete successful.');</script>
	<?php
	header('Location:vendorlist.php');
}
}
?>
</body>
</html>