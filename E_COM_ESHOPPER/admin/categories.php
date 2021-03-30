<?php
require('top.inc.php');
include ('connection.inc.php');


//SELET DATA

    $sql = "select * from category";

    $result=mysqli_query($con,$sql)or die("query unsuccessful");

    if (mysqli_num_rows($result)>0) {


//END SELECT DATA


?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Categories </h4>
				   <h4 class="box-link"><a href="manage_categories.php">Add Categories</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Categories</th>
							   <!-- <th>Status</th> -->
							   <th>Action</th>
							</tr>
						 </thead>
						 <tbody>
											 	 <?php
          while($row = mysqli_fetch_assoc($result))
          {
          	$i=1;
          ?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['c_id'];?></td>
							   <td><?php echo $row['categories'];?></td>
							   <td>
							  	<?php
								if($row['status']==1) { ?> 
									<span class='badge badge-complete' style="margin-left: -3px;"><a href="category_status.php?c_id='.$row['c_id'].'&active=1">Active</a></span>&nbsp;
									<?php
									}
									else
									{
									?>
									<span class='badge badge-pending'><a href="category_status.php?c_id='.$row['c_id'].'&deactive=0">Deactive</a></span>

								<?php 
								}
								?>
								   <span class='badge badge-edit'><a href='edit_catregories.php?id=<?php echo $row['c_id'];?>'>Edit</a></span>

                   				<span class='badge badge-delete'><a href='delete/category_delete.php?id=<?php echo $row['c_id'];?>'>Delete</a></span>
								
								
							</td>
							</tr>
							<?php
							}
							?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>

<?php
}
?>
<?php
require('footer.inc.php');
?>