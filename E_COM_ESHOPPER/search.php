
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


                        <?php
                                if(isset($_GET['search'])){
                    $search_term = mysqli_real_escape_string($con, $_GET['search']);
                  ?>
                  <h2 class="title text-center">Search : <?php echo $search_term; ?></h2>
                            
                  <?php

                    /* Calculate Offset Code */
                    
                         $sql = "SELECT * FROM product JOIN sub_category ON product.p_sub_categories=sub_category.sub_id WHERE  product.name LIKE '%{$search_term}%' OR product.description LIKE '%{$search_term}%' OR product.p_sub_categories  LIKE '%{$search_term}%'
                          AND product.status=1";


                        $result = mysqli_query($con, $sql);
                        if(mysqli_num_rows($result)>0){ ?> 
                        <?php
                         while($row = mysqli_fetch_assoc($result)) {
                       ?>
                        <a href="product-details.php?pid=<?php echo $row['p_id'];?>">
                            <div class="col-sm-4">   
                            <div class="product-image-wrapper">    
                                <div class="single-products">
                         <div class="productinfo text-center" id="image">
                         <img src="admin/<?php echo $row['image'];?>" /> 
                         <h2><?php echo $row['name']; ?></h2>
                         <h2>RS. <?php echo $row['price']; ?></h2>
                        <p><?php echo $row['description']; ?></p>
                        </div> </div> </div> </div> </a> 
                            <?php } } else{
                      echo "<h2 style='color: orange'>No Record Found.</h2>";
                    } }?>
                        
                    </div>

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