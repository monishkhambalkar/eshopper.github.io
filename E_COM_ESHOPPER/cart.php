
<?php

require('connect.php');
include 'header.php';


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
<body>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart </li><!-- <a href="index.php"><button type="button" class="btn btn-fefault cart">continue shopping</button> -->
				</ol>
			</div>
<?php
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["p_id"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      } 
}
}
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as $value){
    if($value['p_id'] === $_POST["p_id"]){
        $value['qty'] = $_POST["qty"];
        break; // Stop the loop after we've found the product
}
}   
}



?>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
			<tr class="cart_menu">	
							<td class="image">image</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td>Delete</td>
						</tr>
					</thead>
					<tbody>
						<?php
if(isset($_SESSION["shopping_cart"])){
	
    $total_price = 0;
    $total_amt = 0;
?>					
<?php 
foreach ($_SESSION["shopping_cart"] as $product){
?>
		
						<tr>
							<td class="cart_product">
								<img src='admin/<?php echo $product["image"];?>' height="100px;" width="100px;">
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $product["name"]; ?></a></h4>
								<p>PRO ID: <?php echo $product["p_id"]; ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $product["price"]; ?></p>
							</td>
							<td class="cart_quantity">
							<form method='post' action=''>
								<input type='hidden' name='p_id' value="<?php echo $product["p_id"]; ?>" />
								<input type='hidden' name='action' value="change" />
								<select name='qty' class='quantity' onchange="this.form.submit()">
								<option <?php if($product["qty"]==1) echo "selected";?>value="1">1</option>
								<option <?php if($product["qty"]==2) echo "selected";?>value="2">2</option>
								<option <?php if($product["qty"]==3) echo "selected";?>value="3">3</option>
								<option <?php if($product["qty"]==4) echo "selected";?>value="4">4</option>
								<option <?php if($product["qty"]==5) echo "selected";?>value="5">5</option>
								</select>
							</form>	
							</td>
							<td class="cart_total">
								<?php
								$total_amt = ($product["price"]*$product["qty"]);
									?>
								<p class="cart_total_price"><?php echo $total_amt; ?></p>
							</td>
							<td class="cart_delete">
								<form method='post' action=''>
								<input type='hidden' name='p_id' value="<?php echo $product["p_id"]; ?>"/>
								<input type='hidden' name='action' value="remove"/>
								<button type='submit' class='remove'><a class="cart_quantity_delete"><i class="fa fa-times"></i></a></button>
							</form>
							</td>
							<form>
							<?php
							$total_price += ($product["price"]*$product["qty"]);
							}
							?>
							</form>
						</tr>
						</tbody>
						<?php }  ?>
						</table>
						<?php 
						 if(!empty($_SESSION["shopping_cart"])){
						 	?>
							</div>
							<a href="checkout.php"><input type="submit" name="submit" value="PLACE ORDER" class="btn btn-fefault cart" style="margin-top: -60px; margin-left: 950px;">
							</a></form>
						<div style="margin-left: 800px; margin-top: -60px;">
							<!-- <button type="button" class="btn btn-fefault cart">TOTAL</button> --><p style="color: orange; font-weight: bold; font-size: 25px;">RS.<?php echo $total_price; ?></p></div>
							<?php
						}else
						{
							echo "<h2 style='color: orange'>item is not added</h2>";
						}
						?>

		</div>

	<a href="index.php"><input type="submit" name="submit" value="Continue shopping " class="btn btn-fefault cart" style="margin-top: -60px; margin-left: 120px;">
	</a>
						
	</section> 



    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>



