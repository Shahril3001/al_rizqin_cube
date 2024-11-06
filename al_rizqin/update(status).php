<! DOCTTYPE html>

<html>
<head>
<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Al Rizqin Cube</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="style1.css">
</head>

<body>
<header class="header-area">

        <!-- Logo Area -->
        <div class="logo-area text-center">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <a href="index.html" class="original-logo"><img src="img/core-img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between">

                        <!-- Subscribe btn -->
                        <div class="subscribe-btn">
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="admin_page_pending.php">Home</a></li>
                                    <li><a href="vendorlist.php">Vendor List</a></li>
                                    <li><a href="#" onclick="myFunction()">Sign Out</a></li>
									<script>
								function myFunction() {
								var x;
								if (confirm("Are you sure to log out?") == true) {
								window.location="<?php echo "logout1.php"; ?>";
								} else {
								}
								}
								</script>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
                <!-- ##### Post Content Area ##### -->
                <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="contact-form">
						
                        <!-- Contact Form -->
                            <div class="row">
							<h2 align=left>Update Status</h2><hr></br></br>
           <?php

include 'connection.php';

	if(isset($_GET['orderID'])){
	$orderID=$_GET['orderID'];

	$query1=mysql_query("SELECT * FROM booking WHERE orderID='$orderID'");

	$query2=mysql_fetch_array($query1);
	
	if(isset($_POST['submit'])){
	

		$_var1 = $_POST['new_status'];

	$query3 = "UPDATE booking SET status='$_var1' WHERE orderID='$orderID'";
	$success = mysql_query($query3);
		if($success)
		{	 
          header("location:admin_page_pending.php");
				}

	}
		else
		{
		echo "";
		}
?>

<center>
<table width="850">
<form method="post" enctype="multipart/form-data">

<tr>
<th colspan=3>Booking Detail</th>
</tr>
<td width=250><b>Vendor Username:</b></td><td><input type="text" size="20" name="new_vname" value="<?php echo $query2['vname']; ?>" readonly /></td>
</tr>

<tr>
<td><b>Section:</b></td><td><input type="text" size="20" name="new_section" value="<?php echo $query2['section']; ?>" readonly /></td>
</tr>

<tr>
<td><b>Category:</b></td><td><input type="text" size="80" name="new_pcategory" value="<?php echo $query2['pcategory']; ?>" readonly /></td>
</tr>

<tr>
<td><b>Rent Cost:</b></td><td><input type="text" size="50" name="new_rent" value="BND$<?php echo $query2['rent']; ?>" readonly /></td>
</tr>

<tr>
<td><b>Quantity:</b></td><td><input type="number" size="20" name="new_quantity" value="<?php echo $query2['quantity']; ?>" readonly /></td>
</tr>

<tr>
<td><b>Total Amount:</b></td><td><input type="text" size="20" name="new_total" value="BND$<?php echo $query2['total']; ?>" readonly /></td>
</tr>

<tr>
<td><b>Status:</b></td><td style="background-color:#;"><select name="new_status">
    <option><?php echo $query2['status']; ?> </option>
    <option value="Accepted">Approved</option>
    <option value="Declined">Declined</option>
    <option value="Pending">Pending</option>
  </select></td>
</tr>


<tr>
<td colspan='2' align='center'><input type="submit" name="submit" value="Update" class="btn original-btn"/> <input type="button" name="back" value="Cancel" class="btn original-btn" onclick="goBack()">
<script>
function goBack(){
window.history.back();
}
</script></td>
</tr>
</form>
</table>
</center>
<?php
}
?>
</center>
</div>
    </section>

 <footer class="footer-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Nav Area -->
                    <div class="classy-nav-container breakpoint-off">
                        <!-- Classy Menu -->
                        <nav class="classy-navbar justify-content-center">

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                                <!-- Nav Start -->
                               <div class="classynav">
                               <ul>
                                    <li><a href="admin_page_pending.php">Home</a></li>
                                    <li><a href="vendorlist.php">Vendor List</a></li>
                                    <li><a href="#" onclick="myFunction()">Sign Out</a></li>
									<script>
								function myFunction() {
								var x;
								if (confirm("Are you sure to log out?") == true) {
								window.location="<?php echo "logout1.php"; ?>";
								} else {
								}
								}
								</script>
                                </ul>
                            </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                    <!-- Footer Social Area -->
                    <div class="footer-social-area mt-30">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Al Rizqin Cube <i class="fa fa-heart-o" aria-hidden="true"></i>
</body>
</html>