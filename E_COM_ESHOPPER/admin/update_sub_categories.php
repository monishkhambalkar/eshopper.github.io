<?php
require('top.inc.php');




if (isset($_POST['submit'])) {
	$id = $_POST['sub_id'];
$categories_id = $_POST['categories_id'];
$sub_categories = $_POST['sub_categories'];


$select = "UPDATE  sub_category set c_categories='{$categories_id}',sub_categories='{$sub_categories}',status=1 where sub_id={$id}";

$qry = mysqli_query($con, $select);

header("location:sub_categories.php");


mysqli_close($con);



}


?>






