<?php

require('top.inc.php');
require('connection.inc.php');

    $sql = "select * from custmer_detail";

    $result=mysqli_query($con,$sql)or die("query unsuccessful");
    if (mysqli_num_rows($result)>0) {

?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title"> Custmer Detail</h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Email</th>
							   <th>Mobile</th>
							   <th>Address</th>
							   <th>city</th>
							   <th>ZIP</th>
							   <th>Action</th>
							</tr>
						 </thead>
						 <tbody>

						 	 <?php
          				while($row = mysqli_fetch_assoc($result))
          					{
          						$i = 1;
         					 ?>
							
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id'];?></td>
							   <td><?php echo $row['name'];?></td>
							   <td><?php echo $row['mobile'];?></td>
							   <td><?php echo $row['address'];?></td>
							   <td><?php echo $row['city'];?></td>
							   <td><?php echo $row['zip'];?></td>
							   <td>
								<span class='badge badge-success'><a href='view.php?id=<?php echo $row['id'];?>'>view order</a></span>


								  <!-- <span class='badge badge-edit'><a href='manage_categories?id=<?php echo $row['id'];?>'>Edit</a></span> -->
                   				<span class='badge badge-delete'><a href='delete/custmerdetails_delete.php?id=<?php echo $row['id'];?>'>Delete</a></span>
								
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