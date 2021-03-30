 <?php
require('connect.php');
session_start();

$msg ="";

//login woth php
if (isset($_POST['submit'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];
   $sql = "select * from custmer_user where email='$email' && password='$password'";
   $result = mysqli_query($con,$sql);
   $num = mysqli_num_rows($result);
   if ($num==1) {
     $_SESSION['email']=$email;
   	if (isset($_POST['remember'])) {
   		setcookie('email',$email,time()+60*60);
   		setcookie('password',$password,time()+60*60);
   	}else
   	{
   		setcookie('email',$email,time()-60*60);
   		setcookie('password',$password,time()-60*60);
   	}
   	header('location:index.php');
 }
   else
   {
      /*header('location:login.php');*/
      $msg = "<h4 style='color:red;'>Invalid userid or password</h4>";
   }
//end login with php




}
$email_cookie="";
$password_cookie = "";
if (isset($_COOKIE['email']) && isset($_COOKIE['email'])) {
$email_cookie = $_COOKIE['email'];
$password_cookie = $_COOKIE['password'];
}

?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
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
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
 	

				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
							<form action="#" method="post">
							<input type="email" placeholder="Email Address" name="email" value="<?php echo $email_cookie ?>" />
							<input type="password" placeholder="password" name="password" value="<?php echo $password_cookie ?>" />
							<span>
								<input type="checkbox" class="checkbox" name="remember" value="">
								Remember Me
							</span>

						<?php
						echo $msg;
						?>
							
							<button type="submit" class="btn btn-default" name="submit" value="submit" style="color: white;">Login</button>

							<button type="submit" class="btn btn-default" name="submit" value="submit" style=" margin-left:120px; margin-top: -31px; color: white;"><a href="registration.php">Creat Account</a></button>


			<!-- 				<div class="row" style="margin-top: 10px; padding-left: 35px;">
 				 <div class="col-md-3">
            <button type="submit" class="btn btn-default" name="submit" value="submit" style=" margin-left:-30px; margin-top: 31px; color: white;">
    				<a class="btn btn-outline-dark" onclick="window.location = '<?php echo $loginURL ?>';" name="google"  href="https://accounts.google.com/signin/oauth" role="button" style="text-transform:none">
      				<img width="50px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
     				 Login with Google
    				</a></button>
 				 </div>
				</div> -->
							
					
						</form>
					</div><!--/login form-->

					<br><br><br>


				<!-- GOOGLE LOGIN -->

				
				</div>


				


			</div>
		</div>
	</section><!--/form-->
	
	

</body>
</html>















