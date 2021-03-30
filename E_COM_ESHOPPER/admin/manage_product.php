

<!-- QUERY -->

<?php
require('top.inc.php');


$msg = "";
//INSERT DATA
if (isset($_POST['submit'])) {

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
$sql = "select * from product where name='$name'";
$qry = mysqli_query($con,$sql);
$num=mysqli_num_rows($qry);
if ($num==1) {
		echo "<script>alert('product already insert')</script>";
	/*header('location:product.php');*/
}
else
{
$insert = "insert into product (p_categories,p_sub_categories,name,price,qty,image,description,status)values('$categories_id','$sub_categories_id','$name','$price','$qty','$destfile','$desc',1)";
mysqli_query($con,$insert);
	header('location:product.php');
}
}
}
//END INSERT DATA


?>

<!-- QUERY END -->

	
<!-- START HTML -->
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Product</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">

							   	
									<label for="categories" class=" form-control-label">Categories</label>
									<select name="categories_id" required class="form-control">
										<option value="">Select Categories</option>
										
										<?php

										$sql = "select * from category";
										$result = mysqli_query($con,$sql)or die("query unsuccessful");
										 while ($row = mysqli_fetch_assoc($result)){
										 	?>
										 	<option value="<?php echo $row['c_id'];?>"><?php echo $row['categories'];?></option>

										 	<?php
										 }

										?>
									
									</select>
    							 		 <!--END SELECT CATEGORY -->



								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Sub Categories</label>
								<select class="form-control" name="sub_categories_id" id="sub_categories_id">
										<option>Select Sub Category</option> 

									<!-- 	SUB CATEGORY -->

									  <?php

         					 $sql2="select * from sub_Category";
          					 $result2=mysqli_query($con,$sql2)or die("query unsuccessful");
          					  while ($row2 = mysqli_fetch_assoc($result2)){
    						
   
     					 	?>
										 	<option value="<?php echo $row2['sub_id'];?>"><?php echo $row2['sub_categories'];?></option>

										 	<?php
										 }

										?>
						</select>
								<!-- END SUB CATEGORY -->	
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Product Name</label>
									<input type="text" name="name" placeholder="Enter product name" class="form-control" required value="">
								</div>
							

								<div class="form-group">
									<label for="categories" class=" form-control-label">Price</label>
									<input type="text" name="price" placeholder="Enter product price" class="form-control" required value="">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Qty</label>
									<input type="text" name="qty" placeholder="Enter qty" class="form-control" required value="">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control" value="<?php echo $row['image']; ?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label"> Description</label>
									<input name="desc" placeholder="Enter product short description" value="" class="form-control" required>
								</div>
								
									
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg; ?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<!-- END HTML -->