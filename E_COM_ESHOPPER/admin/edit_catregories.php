<?php
require('top.inc.php');


   $cat_id = $_GET['id'];
    $sql = "SELECT * FROM category WHERE c_id = {$cat_id}";
    $result=mysqli_query($con,$sql);
    if (mysqli_num_rows($result)>0) {
    while ($row=mysqli_fetch_assoc($result)) {
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                        <form method="post" action="update_categories.php">
                     <div class="card-body card-block">
                        <div class="form-group">

                              <input type="hidden" name="c_id" class="form-control" value="<?php echo $row['c_id'];?>">

                           <label for="categories" class=" form-control-label">Categories</label>
                           <input type="text" name="categories" placeholder="Enter categories name" class="form-control" required value="<?php echo $row['categories']; ?>">
                        </div>
                        <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount">Submit</span>
                        </button>
                        <div class="field_error"></div>
                     </div>
                  </form>

                  <?php
               }
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