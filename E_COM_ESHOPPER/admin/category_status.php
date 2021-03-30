<?php
require('connection.inc.php');

if (isset($_GET['active']) || $_GET['deactive']) {
	# code...

$c_id = $_GET['c_id'];
$active = $_GET['active'];
$deactive = $_GET['deactive']; 
{
mysqli_query($con,"update `category` set `status` = '1' where c_id ='$c_id'");
  	}  	else
  	 {
  		mysqli_query($con,"update `category` set `status` = '0' where c_id ='$c_id'");
  	}
/*$sql  = "update category set status = $action where c_id =$id";
mysqli_query($con,$sql);*/
/*header('location:categories.php');*/

}

?>