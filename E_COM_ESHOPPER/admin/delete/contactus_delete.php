<?php
require('../connection.inc.php');


 $stu_id = $_GET['id'];


//PRODUCT DELETE DATA
    $sql = "DELETE FROM contact_us WHERE id = {$stu_id}";

    $result=mysqli_query($con,$sql)or die("query unsuccessful");

    header("location:../contact_us.php");

//END PRODUCT DELETE DATA


































?>