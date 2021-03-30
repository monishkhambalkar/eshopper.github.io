<?php
require('top.inc.php');

$msg = "";


//insert data
if (isset($_POST['submit'])) {

$id = $_POST['c_id'];
$category= $_POST['categories'];

$select = "UPDATE category set categories='{$category}',status=1 where c_id={$id}";

$qry = mysqli_query($con, $select);

header('location:categories.php');

   


mysqli_close($con);

}


