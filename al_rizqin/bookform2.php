<html>
<head>
<title>Ordering Process</title>
</head>
<body>
<?php
include 'connection.php';

$vendorID= $_POST['vendorID'];
$vname= $_POST['vname'];
$vcontact= $_POST['vcontact'];
$date= $_POST['date'];


$section= $_POST['section'];
$pcategory= $_POST['pcategory'];
$quantity= $_POST['quantity'];
$rent= $_POST['rent'];
$total= $rent*$quantity;


mysql_query ("INSERT INTO booking (orderID, vendorID, vname, vcontact, section, rent, pcategory, status, quantity, total, date)
VALUES ('','".$vendorID."','".$vname."','".$vcontact."','".$section."','".$rent."','".$pcategory."','Pending','".$quantity."','".$total."','".$date."')");	
	
header("location:index2.php?vname=".$vname."");

?>
</body>
</html>