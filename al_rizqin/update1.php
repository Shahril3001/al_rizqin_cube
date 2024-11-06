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
								<?php
								$vname=$_GET['vname'];
                                    echo"<li><a href='index2.php?vname=".$vname."'>Home</a></li>
									<li><a href='profile.php?vname=".$vname."'>Profile</a></li>
									<li><a href='about-us.php?vname=".$vname."'>About Us</a></li>
                                    <li><a href='gallery.php?vname=".$vname."'>Gallery</a></li>
									<li><a href='#' onclick='myFunction()'>Sign Out</a></li>";
									?>
									<script>
								function myFunction() {
								var x;
								if (confirm("Are you sure to log out?") == true) {
								window.location="<?php echo "logout.php?vname=".$vname.""; ?>";
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
							<h2 align=left>My Profile</h2><hr></br></br>
           <?php

include 'connection.php';

	if(isset($_GET['vname'])){
	$vname=$_GET['vname'];

	$query1=mysql_query("SELECT * FROM vendor WHERE vname='$vname'");

	$query2=mysql_fetch_array($query1);
	
	if(isset($_POST['submit'])){
	
	
		$_var1 = $_POST['new_vicnumber'];
		$_var2 = $_POST['new_vhome'];
		$_var3 = $_POST['new_vcontact'];
		$_var4 = $_POST['new_vsocial'];
		$_var5 = $_POST['new_vpassword'];

	$query3 = "UPDATE vendor SET vicnumber='$_var1', vhome='$_var2', vcontact='$_var3', vsocial='$_var4', password='$_var5' WHERE vname='$vname'";
	$success = mysql_query($query3);
		if($success)
		{	 
          header("location:profile.php?vname=".$vname."");
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
<th colspan=3>Personal Detail</th>
</tr>
<td width=250><b>Username:</b></td><td><?php echo $query2['vname']; ?></td>
</tr>

<tr>
<td><b>Identity Card No:</b></td><td><input type="text" size="20" name="new_vicnumber" value="<?php echo $query2['vicnumber']; ?>" /></td>
</tr>

<tr>
<td><b>Home Address:</b></td><td><input type="text" size="80" name="new_vhome" value="<?php echo $query2['vhome']; ?>" /></td>
</tr>

<tr>
<td><b>IG/Facebook Name:</b></td><td><input type="text" size="50" name="new_vsocial" value="<?php echo $query2['vsocial']; ?>" /></td>
</tr>

<tr>
<td><b>Contact No:</b></td><td><input type="text" size="20" name="new_vcontact" value="<?php echo $query2['vcontact']; ?>" /></td>
</tr>

<tr>
<td><b>Password:</b></td><td><input type="text" name="new_vpassword" value="<?php echo $query2['password']; ?>" /></td>
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
								<?php
								$vname=$_GET['vname'];
                                    echo"<li><a href='index2.php?vname=".$vname."'>Home</a></li>
									<li><a href='profile.php?vname=".$vname."'>Profile</a></li>
									<li><a href='about-us.php?vname=".$vname."'>About Us</a></li>
                                    <li><a href='gallery.php?vname=".$vname."'>Gallery</a></li>
									<li><a href='#' onclick='myFunction()'>Sign Out</a></li>";
									?>
									<script>
								function myFunction() {
								var x;
								if (confirm("Are you sure to log out?") == true) {
								window.location="<?php echo "logout.php?vname=".$vname.""; ?>";
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