<?php
require('top.inc.php');
require('connection.inc.php');





//ACTIVE/DEACTIVE
if (isset($_GET['action']) && $_GET['action']=='active' && isset($_GET['id']) && ! empty($_GET['id'])) {
	$sql = "UPDATE product SET status = 0 WHERE p_id = ".$_GET['id']."";
	$con->query($sql);
}
if (isset($_GET['action']) && $_GET['action']=='deactive' && isset($_GET['id']) && ! empty($_GET['id'])) {
	$sql = "UPDATE product SET status = 1 WHERE p_id = ".$_GET['id']."";
	$con->query($sql);	
}

//ACTIVE/DEACTIVE





//SELECT DATA

/*$sql = "SELECT * FROM product";*/
	  $sql = "SELECT * FROM product JOIN category ON product.p_categories = category.c_id JOIN sub_category ON product.p_sub_categories = sub_category.sub_id ";
	$result=mysqli_query($con,$sql)or die("query unsuccessful");

    if(mysqli_num_rows($result)>0){



?>


<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Products </h4>
				   <h4 class="box-link"><a href="manage_product.php">Add Product</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th width="2%">ID</th>
							   <th width="5%">Categories</th>
							   <th width="10%">Sub_Categories</th>
							   <th width="20%">Name</th>
							   <th width="20%">Image</th>
							   <th width="7%">Price</th>
							   <th width="7%">Qty</th>
							   <th width="35%">Action</th>
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
							   <td><?php echo $row['p_id'];?></td>
							   <td><?php echo $row['categories'];?></td>
							    <td><?php echo $row['sub_categories'];?></td>	
							     <td><?php echo $row['name'];?></td>
							   <td><img src="<?php echo $row['image'];?>"/></td>
							   <td><?php echo $row['price'];?></td>
							   <td><?php echo $row['qty'];?></td>
							   <td>
							 	 	

								  	<?php
								if($row['status']==0) { ?> 
									<span class='badge badge-pending' style="margin-left: -3px;"><a href="?action=deactive&id=<?php echo $row ['p_id'];?>">Deactive</a></span>&nbsp;
									<?php
									}
									else
									{	
									?>
									<span class='badge badge-complete'><a href="?action=active&id=<?php echo $row['p_id'];?>">Active</a></span>
								<?php 
								}
								?>




								  <span class='badge badge-edit'><a href='edit_product.php?id=<?php echo $row['p_id'];?>'>Edit</a></span>
                   				
                   				<span class='badge badge-delete'><a href='delete/product_delete.php?id=<?php echo $row['p_id'];?>'>Delete</a></span>
									
							</tr>
						  <?php }
						  
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

  <?php }
 ?>



<?php
require('footer.inc.php');
?>