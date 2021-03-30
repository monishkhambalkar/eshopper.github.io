<?php
require('top.inc.php');

?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Order Detail </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table">
								<thead>
									<tr>
										<th class="product-thumbnail">Product Name</th>
										<th class="product-thumbnail">Product Image</th>
										<th class="product-name">Qty</th>
										<th class="product-price">Price</th>
										<th class="product-price">Total Price</th>
									</tr>
								</thead>
								<tbody>
									
									<tr>
										<td class="product-name"></td>
										<td class="product-name"> <img src=""></td>
										<td class="product-name"></td>
										<td class="product-name"></td>
										<td class="product-name"></td>
										
									</tr>
									
									<tr>
										<td colspan="3"></td>
										<td class="product-name">Coupon Value</td>
										<td class="product-name">
										</td>
										
									</tr>
									
									<tr>
										<td colspan="3"></td>
										<td class="product-name">Total Price</td>
										<td class="product-name"></td>
										
									</tr>
								</tbody>
							
						</table>
						<div id="address_details">
							<strong>Address</strong>
							<br/><br/>
							<strong>Order Status</strong>
						
							
							<div>
								<form method="post">
									<select class="form-control" name="update_order_status" id="update_order_status" required onchange="select_status()">
										<option value="">Select Status</option>
										
									</select>
									<div id="shipped_box" style="display:none">
										<table>
											<tr>
												<td><input type="text" class="form-control" name="length" placeholder="length"/></td>
												<td><input type="text" class="form-control" name="breadth" placeholder="Breadth"/></td>
												<td><input type="text" class="form-control" name="height" placeholder="height"/></td>
												<td><input type="text" class="form-control" name="weight" placeholder="weight"/></td>
											</tr>
										</table>
									</div>
									<input type="submit" class="form-control"/>
								</form>
							</div>
						</div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
