

<!-- QUERY -->

<?php
require('top.inc.php');


$msg = "";
//INSERT DATA
if (isset($_POST['submit'])) {
$id = $_POST['p_id'];
$categories_id = $_POST['categories_id'];
$sub_categories_id = $_POST['sub_categories_id'];
$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$file = $_FILES['image'];
$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];
$desc = $_POST['desc'];
if ($fileerror==0) {
	$destfile = 'upload/'.$filename;
	move_uploaded_file($filepath, $destfile);

}
$select = "UPDATE product set p_categories='{$categories_id}',p_sub_categories='{$sub_categories_id}',name='{$name}',price='{$price}',qty='{$qty}',image='{$destfile}',description='{$desc}',status=1 where p_id={$id}";

$qry = mysqli_query($con, $select);

header("location:product.php");


mysqli_close($conn);

}



?>