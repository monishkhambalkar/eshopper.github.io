<?php
require('top.inc.php');
require('connection.inc.php');





//ACTIVE/DEACTIVE
/*if (isset($_GET['action']) && $_GET['action']=='active' && isset($_GET['id']) && ! empty($_GET['id'])) {
	$sql = "UPDATE product SET status = 0 WHERE p_id = ".$_GET['id']."";
	$con->query($sql);
}
if (isset($_GET['action']) && $_GET['action']=='deactive' && isset($_GET['id']) && ! empty($_GET['id'])) {
	$sql = "UPDATE product SET status = 1 WHERE p_id = ".$_GET['id']."";
	$con->query($sql);	
}
*/
//ACTIVE/DEACTIVE





//SELECT DATA

/*$sql = "SELECT * FROM product";*/
	  $sql = "SELECT * FROM dumy_order";
	$result=mysqli_query($con,$sql)or die("query unsuccessful");

    if(mysqli_num_rows($result)>0){



?>


<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Products of </h4>
				   <h4 class="box-link"><a href="">name</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th width="10%">ID</th>
							   <th width="20%">Image</th>
							   <th width="15%">Price</th>
							   <th width="7%">Qty</th>
							   <th width="30%">total</th>
							   <th width="30%">sum_total</th>
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
							   <td><?php echo $row['id'];?></td>
							   <td><img src="<?php echo $row['image'];?>"/></td>
							   <td><?php echo $row['price'];?></td>
							   <td><?php echo $row['qty'];?></td>
							     <td><?php echo $row['total'];?></td>
							     <td><?php echo $row['sum_total'];?></td>
							   <td>
							
								
                   				
                   				<span class='badge badge-dark'><a href='Custmer_detail.php'>Back</a></span>
									
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