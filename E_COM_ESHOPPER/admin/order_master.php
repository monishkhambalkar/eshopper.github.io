<?php
require('top.inc.php');


?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Order Master </h4>
				   <p>sold</p>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table">
							<thead>
								<tr>
									<th class="product-thumbnail">Order ID</th>
									<th class="product-name"><span class="nobr">Order Date</span></th>
									<th class="product-price"><span class="nobr"> Address </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Payment Type </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Payment Status </span></th>
									<!-- <th class="product-stock-stauts"><span class="nobr"> Order Status </span></th>
									<th class="product-stock-stauts"><span class="nobr"> Shipment Details </span></th> -->
									<th class="product-stock-stauts"><span class="nobr"> Action </span></th>
								</tr>
							</thead>
							<tbody>
								
								<tr>
									<td class="product-add-to-cart"><a href=""></a><br/>
									<a href="">PDF</a></td>
									<td class="product-name"></td>
									<td class="product-name">
									<br/>
									<br/>
									
									</td>
									<td class="product-name"></td>
									<!-- <td class="product-name"></td>
									<td class="product-name"></td> -->
									<td class="product-name">
									</td>
									<td>
								
								<span class='badge badge-edit'><a href='manage_categories?id=<?php echo $row['id'];?>'>Edit</a></span>
                   				 <span class='badge badge-delete'><a href='delete-inline.php?id=<?php echo $row['id'];?>'>Delete</a> </span>
							
								</tr>
								
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
require('footer.inc.php');
?>