<?php
require('top.inc.php');
include ('connection.inc.php');


//ACTIVE/DEACTIVE
/*if(!empty($_GET['status_id'])&&isset($_GET['status_id']))
		{
			$status_id = $_GET['status_id'];
			$status = $_GET['status'];
			$query = "UPDATE sub_category set status = '$status' WHERE sub_id = '$status_id'";
			mysqli_query($con, $query);
			}*/
//ACTIVE/DEACTIVE

    $sql = "SELECT * from sub_category join category where sub_category.c_categories=category.c_id";
  
    $result=mysqli_query($con,$sql)or die("query unsuccessful");
 

    if (mysqli_num_rows($result)>0) {

?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Sub Categories </h4>
				   <h4 class="box-link"><a href="manage_sub_categories.php">Add Sub Categories</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Categories</th>
							   <th>Sub Categories</th>
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
							   <td><?php echo $row['sub_id'];?></td>
							   <td><?php echo $row['categories'];?></td>
							   <td><?php echo $row['sub_categories'];?></td>
							   <td>
								<?php
								if($row['status']==1) { ?> 
									<span class='badge badge-complete'><a href="?status_id=<?php echo $row['sub_id'];?>&status=0">Active</a></span> &nbsp;
									<?php
									}
									else
									{
									?>
									<span class='badge badge-pending' style="margin-left: -3px;"><a href="?status_id=<?php echo $row['sub_id'];?>&status=1">Deactive</a></span>
								<?php 
								}
								?>
								   <span class='badge badge-edit'><a href='edit_sub_categories.php?id=<?php echo $row['sub_id'];?>'>Edit</a></span>
                   					<span class='badge badge-delete'><a href='delete/sub_caregory_delete.php?id=<?php echo $row['sub_id'];?>'>Delete</a></span>
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