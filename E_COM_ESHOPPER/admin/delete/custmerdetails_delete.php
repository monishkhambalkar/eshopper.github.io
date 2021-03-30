<?php
require('../connection.inc.php');


 $stu_id = $_GET['id'];

//PRODUCT DELETE DATA
    $sql="DELETE FROM custmer_detail WHERE id = {$stu_id}";


    $result=mysqli_query($con,$sql)or die("query unsuccessful");

    header("location:../custmer_detail.php");

//END PRODUCT DELETE DATA


































?>