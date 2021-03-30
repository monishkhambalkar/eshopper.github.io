
 <?php
include 'header.php';
 ?>
<body>
<?php
include 'sidebar.php';
?>
<!-- top -->
<section>
    <div class="col-sm-9 padding-right">
    <div class="features_items">
    <div class="margin">            

                          <!--   SUB CATEGORY NAME -->
                                 <?php

                      if (isset($_GET['subid'])) {
                    $sub_id = $_GET['subid'];
            

                    $sql1 = "SELECT * FROM sub_category WHERE sub_id = {$sub_id}";
                    $result1 = mysqli_query($con, $sql1) or die("Query Failed.");
                    $row1 = mysqli_fetch_assoc($result1);

                    ?>
                    <!-- END SUB CATEGORY NAME -->

                      <h2 class="title text-center"><?php echo $row1['sub_categories']; ?></h2>

                      <?php

                                  if (isset($_GET['pid'])) {
                                $pid_id = $_GET['pid'];
                                }


                                /*PAGINATION*/




                                  /*END PAGINATION*/

                  
                             /*   SELECT DATA*/

                         $sql = "SELECT * FROM product JOIN sub_category ON product.p_sub_categories=sub_category.sub_id WHERE product.p_sub_categories={$sub_id} AND product.status=1 LIMIT 9";

                        $result = mysqli_query($con, $sql)or die("Query Failed.");
                        if(mysqli_num_rows($result)>0){ ?> 
                        <?php
                         while($row = mysqli_fetch_assoc($result)) {
                       ?>
                          <a href="product-details.php?pid=<?php echo $row['p_id'];?>">
                      <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center" id="image">
                                      <img src="admin/<?php echo $row['image'];?>"/>
                                        <h2><?php echo $row['name']; ?></h2>
                                        <h2>RS. <?php echo $row['price']; ?></h2>
                                       <p><?php echo $row['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                                 <?php } } else{
                      echo "<h2 style='color: orange'>No Record Found.</h2>";
                    }
                  }
?>

</div> 
</div>


                  <!--   /*  PAGINATION*/-->



                        <!-- /*PAGINATION*/ -->

                    







  

</div>

      </div> 
       </div>
    </section>

<?php
include 'footer.php';
 ?>

    
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

</body>
</html>