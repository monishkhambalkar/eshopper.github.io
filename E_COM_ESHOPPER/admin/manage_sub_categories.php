<?php
require('top.inc.php');

$msg = "";
if (isset($_POST['submit'])) {
	
$categories_id = $_POST['categories_id'];
$sub_categories = $_POST['sub_categories'];

$sql = "select * from sub_category where sub_categories ='$sub_categories'";
$res = mysqli_query($con,$sql);
 $num = mysqli_num_rows($res);
   if ($num==1) 
   {
      $msg = "<h4 style='color: red; margin-top: 15px;'>sub category already insert</h4>";
}
else
{
			$sql ="insert into sub_category(c_categories,sub_categories,status)values('$categories_id','$sub_categories',1)";
			mysqli_query($con,$sql);
			header('location:sub_categories.php');
}

}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Sub Categories</strong><small> Form</small></div>
                        <form method="post">
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
								</div>
								<div class="form-group">
									
									<label for="categories" class=" form-control-label">Sub Categories</label>
									<input type="text" name="sub_categories" placeholder="Enter sub categories" class="form-control" required value="">
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
         
<?php
require('footer.inc.php');
?>