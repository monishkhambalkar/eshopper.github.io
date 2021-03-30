

<!-- QUERY -->

<?php
require('top.inc.php');



//END INSERT DATA

//select data for update data

    $prd_id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE p_id = {$prd_id}";
    $result=mysqli_query($con,$sql);
    if (mysqli_num_rows($result)>0) {
    while ($row=mysqli_fetch_assoc($result)) {
//end select data for update data


//UPDATE START




//UPDATE END

?>

<!-- QUERY END -->

	
<!-- START HTML -->
<div class="content pb-0">
            <div class="animated fadeIn">


               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Product</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data" action="update_product.php">
							<div class="card-body card-block">
							   <div class="form-group">


							   	<input type="hidden" name="p_id" class="form-control" value="<?php echo $row['p_id'];?>">
							   	
									<label for="categories" class=" form-control-label">Categories</label>
									<!-- <select class="form-control" name="categories_id" required>
										<option>Select Category</option> -->

										<!-- SELECT CATEGORY -->
									          <?php

         						$sql1="select * from Category";

           						$result1=mysqli_query($con,$sql1)or die("query unsuccessful");

   								 if (mysqli_num_rows($result1)>0) {
     							echo '<select class="form-control" name="categories_id" required>';
   
     							while ($row1 = mysqli_fetch_assoc($result1)) {
     							 if ($row['p_categories']==$row1['c_id']) {
      							    $select= "selected";
      							}else{
      							  $select = "";
      							}

     							 echo "<option {$select} value='{$row1['c_id']}'>{$row1['categories']}</option>";
    							}
   							 echo "</select>";
 							 }
    							 		 ?>
    							 		 <!--END SELECT CATEGORY -->



								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Sub Categories</label>
							<!-- 	<select class="form-control" name="sub_categories_id" id="sub_categories_id">
										<option>Select Sub Category</option> -->

									<!-- 	SUB CATEGORY -->

									  <?php

         					 $sql2="select * from sub_Category";

          					 $result2=mysqli_query($con,$sql2)or die("query unsuccessful");

    						if (mysqli_num_rows($result2)>0) {
   							  echo '<select class="form-control" name="sub_categories_id">';
   
     						while ($row2 = mysqli_fetch_assoc($result2)) {
     						 if ($row['p_sub_categories']==$row2['sub_id']) {
         					 $select= "selected";
     						 }else{
      						  $select = "";
     							 }

    						  echo "<option {$select} value='{$row2['sub_id']}'>{$row2['sub_categories']}</option>";
   							 }
   						 echo "</select>";
 							 }

          					?>

								<!-- END SUB CATEGORY -->	
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Product Name</label>
									<input type="text" name="name" placeholder="Enter product name" class="form-control" required value="<?php echo $row['name']; ?>">
								</div>
							

								<div class="form-group">
									<label for="categories" class=" form-control-label">Price</label>
									<input type="text" name="price" placeholder="Enter product price" class="form-control" required value="<?php echo $row['price']; ?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Qty</label>
									<input type="text" name="qty" placeholder="Enter qty" class="form-control" required value="<?php echo $row['qty'];?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control" value="<?php echo $row['image']; ?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label"> Description</label>
									<input name="desc" placeholder="Enter product short description" value="<?php echo $row['description']; ?>" class="form-control" required>
								</div>
								
									
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 <?php
		}
	}



		 ?>
	
<!-- END HTML -->