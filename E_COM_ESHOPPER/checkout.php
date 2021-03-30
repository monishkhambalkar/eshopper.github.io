
<?php
require('connect.php');
require 'header.php';
if (!isset($_SESSION['email'])) {
		echo'<script type="text/javascript">';
	echo 'window.location.href="login.php."';
	echo '</script>';
}
if (empty($_SESSION["shopping_cart"])) {
	echo'<script type="text/javascript">';
	echo 'window.location.href="login.php."';
	echo '</script>';
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/newstyle.css" rel="stylesheet">     
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
 <?php

if (isset($_POST['pay'])) 
{
$username = $_SESSION['email'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
      $insert = "INSERT INTO custmer_detail(username,name,mobile,address,city,zip)VALUES('$username','$name','$mobile','$address','$city','$zip')";
      mysqli_query($con, $insert);
}
?>

<body>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div>
			<div class="register-req">
				<p>Fill all information</p>
			</div>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-8 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form method="post" action="thnk.php" enctype="multipart/form-data">
									<input type="text" name="name" placeholder=" Name" required="">
									<input type="text" name="mobile" placeholder="mobile" required="">
									<input type="text" name="address" placeholder="Address" required="">
									<input type="text" name="city" placeholder="city" required="">
									<input type="text" name="zip" placeholder="Zip / Postal Code *" required="">
									

									 <div class="payment-options" style="margin-top:5px;">
			<input type="submit" style=" width: 350px;" class="btn btn-primary" name="pay" value="Cash on delivery">
				</div>
				</form>			
							</div>
						</div>
					</div>
					</div>	
					</div>	
	</div>
</section> 
 <?php
include 'footer.php';

 ?>
	

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>