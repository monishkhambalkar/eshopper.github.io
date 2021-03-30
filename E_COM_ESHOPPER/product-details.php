<?php

require('connect.php');
require'header.php';
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
	<section>
<?php
$status="";
if (isset($_POST['p_id']) && $_POST['p_id']!=""){
$p_id = $_POST['p_id'];
$result = mysqli_query($con,"SELECT * FROM `product` WHERE `p_id`='$p_id'");
$row = mysqli_fetch_assoc($result);
$p_id = $row['p_id'];
$name = $row['name'];
$price = $row['price'];
$qty = $row['qty'];
$image = $row['image'];
$cartArray = array(
	$p_id=>array(
	'p_id'=>$p_id,
	'name'=>$name,
	'price'=>$price,
	'qty'=>1,
	'image'=>$image)
);
if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($p_id,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}
	}
}
?>

				<div class="container">
				<div class="row">
				<div class="col-sm-9 padding-right">
				<div class="product-details">
			<form method="post" action="">
				<div class="col-sm-5">
				<div class="view-product">
					<?php
				      if (isset($_GET['pid'])) {
                                $pid_id = $_GET['pid'];
                                }
                    $sql = "SELECT * FROM product where p_id=$pid_id";
                        $result = mysqli_query($con, $sql);
                        if(mysqli_num_rows($result) > 0){ ?>
                        <?php
                      while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <input type='hidden' name='p_id' value="<?php echo $row ['p_id'];?>" />
					<img src="admin/<?php echo $row ['image'];?>" width="330" height="380"/>
				</div>	
				</div>
			<div class="col-sm-7">
			<div class="product-information"><!--/product-information-->
					<h1 style="margin-top:-57px; color: #FE980F">Product Detail<h1>
					<h2><?php echo $row ['name'];?></h2>
					<p>Product Id: <?php echo $row ['p_id'];?></p>
					<img src="images/product-details/rating.png"/><br>
					<span><label><!-- Quantity: --></label>
					<input type="hidden"  value="<?php echo $row ['qty'];?>" />
					<span> RS. <?php echo $row ['price'];?></span>					
					</span>
					<br>
					<span><form method="post">
					<input type="hidden" name="id" value="<php echo $row['p_id'];?>" id="id">
					<button type="submit" class="btn btn-fefault cart">
					<i class="fa fa-shopping-cart"></i>Add to cart</button></form>
					</span>
					<?php echo $status ?>
					<?php } } ?>
			</div>
			</div>
		</form>
				</div>	
				</div>
				</div>
				</div>
		
	</section>






<?php
include 'footer.php';
 ?>