<?php
require('../connection.inc.php');


 $stu_id = $_GET['id'];


//PRODUCT DELETE DATA
    $sql = "DELETE FROM sub_category WHERE sub_id = {$stu_id}";


    $result=mysqli_query($con,$sql)or die("query unsuccessful");

    header("location:../sub_categories.php");

//END PRODUCT DELETE DATA


































?>