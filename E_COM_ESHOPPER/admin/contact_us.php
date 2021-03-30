<?php
require('top.inc.php');
require('connection.inc.php');


    $sql = "select * from contact_us";
    $result=mysqli_query($con,$sql)or die("query unsuccessful");
    if (mysqli_num_rows($result)>0) {

?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Contact Us </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>

							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Name</th>
							   <th>Email</th>
							   <th>Mobile</th>
							   <th>Query</th>
							   <th>Date</th>
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
							   <td><?php echo $row['email'];?></td>
							   <td><?php echo $row['mobile'];?></td>
							   <td><?php echo $row['query'];?></td>
							   <td><?php echo $row['date'];?></td>
							   <td> 
								
								
								  
                   				 <span class='badge badge-delete'><a href='delete/contactus_delete.php?id=<?php echo $row['id'];?>'>Delete</a></span>
								
								
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