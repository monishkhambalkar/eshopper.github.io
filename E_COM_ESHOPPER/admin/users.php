<?php
require('top.inc.php');


 $sql = "select * from custmer_user";

    $result=mysqli_query($con,$sql)or die("query unsuccessful");
    if (mysqli_num_rows($result)>0) {


?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Users </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial"></th>
							   <th >ID</th>
							   <th >Name</th>
							   <th >Email</th>
							   <th >Mobile</th>
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
							   <td><?php echo $row['id'];?></td>
							   <td><?php echo $row['name'];?></td>
							   <td><?php echo $row['email'];?></td>
							   <td><?php echo $row['mobile'];?></td>
							  	
							   <td>
									  	<?php
									  	
								if($row['status']==0) { ?> 
									<span class='badge badge-pending' style="margin-left: -3px;"><a href="?action=active&id=<?php echo $row ['p_id'];?>">Deactive</a></span>&nbsp;
									<?php
									}
									else
									{	
									?>
									<span class='badge badge-complete'><a href="?action=deactive&id=<?php echo $row['p_id'];?>">Active</a></span>

								<?php 
								}
								?>
							 
						
                   				 <span class='badge badge-delete'><a href='delete/user_delete.php?id=<?php echo $row['id'];?>'>Delete</a></span>
								
								
							   </td>
							</tr>
						 <?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>


<?php } ?>
<?php
require('footer.inc.php');
?>