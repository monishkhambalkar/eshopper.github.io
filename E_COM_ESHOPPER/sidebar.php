<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						

						<div class="brands_products"><!--brands_products-->
							<h2>KIDS</h2>
							<div class="brands-name">
							<ul class="nav nav-pills nav-stacked">
									<?php 
							if (isset($_GET['subid'])) {
								$sub_id = $_GET['subid'];
							}
							
						$sql = "SELECT * FROM  sub_category WHERE status=1 LIMIT 6,2";
							$res= mysqli_query($con,$sql) or die("Query faqiled:category");
							if (mysqli_num_rows($res)>0) { ?>

							<?php while ($row = mysqli_fetch_assoc($res)) {
									echo"<li><a href='product.php?subid={$row['sub_id']}'>{$row['sub_categories']}</a></li>";?>
									<?php }}?>
								</ul>
							</div>
						</div>







						<div class="brands_products"><!--brands_products-->
							<h2>MEN</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
											<?php 
							if (isset($_GET['subid'])) {
								$sub_id = $_GET['subid'];
							}
							
						$sql = "SELECT * FROM  sub_category WHERE status=1 LIMIT 0,3";
							$res= mysqli_query($con,$sql) or die("Query faqiled:category");
							if (mysqli_num_rows($res)>0) { ?>

							<?php while ($row = mysqli_fetch_assoc($res)) {
									echo"<li><a href='product.php?subid={$row['sub_id']}'>{$row['sub_categories']}</a></li>";?>
									<?php }}?>
								</ul>
							</div>
						</div>

					
						<div class="brands_products"><!--brands_products-->
							<h2>WOMEN</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
											<?php 
							if (isset($_GET['subid'])) {
								$sub_id = $_GET['subid'];
							}
							
						$sql = "SELECT * FROM  sub_category WHERE status=1 LIMIT 3,3";
							$res= mysqli_query($con,$sql) or die("Query faqiled:category");
							if (mysqli_num_rows($res)>0) { ?>

							<?php while ($row = mysqli_fetch_assoc($res)) {
									echo"<li><a href='product.php?subid={$row['sub_id']}'>{$row['sub_categories']}</a></li>";?>
									<?php }}?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
