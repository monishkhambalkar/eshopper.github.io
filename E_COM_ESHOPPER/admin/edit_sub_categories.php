<?php
require('top.inc.php');

    $sub_id = $_GET['id'];
    $sql = "SELECT * FROM  sub_category WHERE sub_id  = {$sub_id}";
    $result=mysqli_query($con,$sql);
    if (mysqli_num_rows($result)>0) {
    while ($row=mysqli_fetch_assoc($result)) {
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Sub Categories</strong><small> Form</small></div>
                        <form method="post" action="update_sub_categories.php">
							<div class="card-body card-block">
							   <div class="form-group">



							   		<input type="hidden" name="sub_id" class="form-control" value="<?php echo $row['sub_id'];?>">
									<label for="categories" class=" form-control-label">Categories</label>
								
										          <?php

         						$sql1="select * from Category";

           						$result1=mysqli_query($con,$sql1)or die("query unsuccessful");

   								 if (mysqli_num_rows($result1)>0) {
     							echo '<select class="form-control" name="categories_id" required>';
   
     							while ($row1 = mysqli_fetch_assoc($result1)) {
     							 if ($row['c_categories']==$row1['c_id']) {
      							    $select= "selected";
      							}else{
      							  $select = "";
      							}

     							 echo "<option {$select} value='{$row1['c_id']}'>{$row1['categories']}</option>";
    							}
   							 echo "</select>";
 							 }
    							 		 ?>
									
									</select>
								</div>
								<div class="form-group">
									
									<label for="categories" class=" form-control-label">Sub Categories</label>
									<input type="text" name="sub_categories" placeholder="Enter sub categories" class="form-control" required value="<?php echo $row['sub_categories']; ?>">
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



         
<?php
require('footer.inc.php');
?>