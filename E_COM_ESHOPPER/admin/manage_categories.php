<?php
require('top.inc.php');

$msg = "";


//insert data
if (isset($_POST['submit'])) {


$category= $_POST['categories'];

$sql = "select * from category where categories = '$category'";
$res = mysqli_query($con,$sql);
 $num = mysqli_num_rows($res);
   if ($num==1) {
      $msg = "<h4 style='color: red; margin-top: 15px;'>category already insert</h4>";
}else{
$sql = "insert into category (categories,status)values('$category',1)";
$result = mysqli_query($con,$sql)or die("query unsuccessful");
header('location:categories.php');

}

//END insert data




?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Categories</label>
									<input type="text" name="categories" placeholder="Enter categories name" class="form-control" required value="<?php echo $row['Categories']; ?>">
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg; ?></div>
							</div>
						</form>

                  <?php
               }
            
                  ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>