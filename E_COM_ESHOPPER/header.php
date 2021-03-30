<?php

        session_start();
  
require('connect.php');
  if(!isset($_SESSION['email'])) 
    { 
        header('location:login.php');
    } 

?>
<!DOCTYPE html>
<html lang="en">
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
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt=""/></a>
						</div>
						
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<?php
								if(!empty($_SESSION["shopping_cart"])) {
								$cart_count = count(array_keys($_SESSION["shopping_cart"]));
								?>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart (<span><?php echo $cart_count; ?></span>)</a></li>
								<?php
								}
								?>
								<ul class="nav navbar-nav collapse navbar-collapse">
									<?php
									if (isset($_SESSION['email'])) {
										?>
										<li class="dropdown"><a href="login.php"><?php echo $_SESSION["email"] ?></a></li>;
									<?php }else
									{
										?>
										<li class="dropdown"><a href="login.php"><i class="fa fa-lock"></i>Login</a></li>;
										<?php
									}
									?>
                            </ul>
                            <li><a href="logout.php">Logout</a></li> 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">

						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>

						<li><a href="contact.php">Contact</a></li>
						</ul>
						</div>

						</div>




					<div class="col-sm-3" id="search-bar">
						<div class="search_box pull-right">
							
							 <form class="search-post" action="search.php" method ="GET">
							<div class="input-group">
							<input  type="text" name="search" class="form-control" placeholder="Search ....."/> <span class="input-group-btn"><button style="background-color: orange; color: white;" type="submit" class="btn btn-default add-to-cart">Search</button>

							</span>
						</div>
						</form>
							   
                   		
						</div>
					</div>

				</div>
			</div>
		</div><!--/header-bottom-->

	</header><!--/header-->







<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript">

	
$(document).ready(function(){

$("#search").on("keyup",function(){

var serch_term = $(this).val();

$.ajax({
url: "ajax-live-search.php",
type: "POST",
data : {search:search_term},
success : function(data){

}

});
});
});

</script>

	</body>
</html>







