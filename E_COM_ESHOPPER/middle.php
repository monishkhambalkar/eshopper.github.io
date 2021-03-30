
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->

			<h2 class="title text-center">men</h2>

					<div class="col-sm-4">
							<div class="product-image-wrapper">
							<div class="productinfo text-center">
								<img src="images/new/formal.jpg" alt="" />
							<h2>formal</h2>
								<p>Raymond</p>
							</div>	
							</div>
							<div>
							</div>
					</div>


					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="productinfo text-center">
										<img src="images/new/t11.jpg" alt="" height="250px;" />
										<h2>t-shirt</h2>
										<p>Us polo</p>
									</div>
							</div>
					</div>

		
					
					<div class="col-sm-4">	
							<div class="product-image-wrapper">
									<div class="productinfo text-center">
										<img src="images/new/jeans8.jpg" height="250px;"/>
										<h2>jeans</h2>
										<p>Levi's</p>										
									</div>
							</div>	
					</div>
						
						






					<h2 class="title text-center">women</h2>


									<!-- SAREE -->


										<?php 
							if (isset($_GET['subid'])) {
								$sub_id = $_GET['subid'];
							}
							
						$sql = "SELECT sub_id FROM  sub_category WHERE status=1 LIMIT 3,1	 ";
							$res= mysqli_query($con,$sql) ;
							if (mysqli_num_rows($res)>0) { ?>

							<?php while ($row = mysqli_fetch_assoc($res)) {		
						echo"<a href='product.php?subid={$row['sub_id']}'>
							<div class='col-sm-4'>
							<div class='product-image-wrapper'>
									<div class='productinfo text-center'>
										<img src='images/new/saree6.jpg' height='280px;'/>
										<h2>saree</h2>
										<p>womanista</p>
									</div>
							</div>

						</div></a>"; ?> <?php }}?>



										<!-- SALWAR -->
						

											<?php 
							if (isset($_GET['subid'])) {
								$sub_id = $_GET['subid'];
							}
							
						$sql = "SELECT sub_id FROM  sub_category WHERE status=1 LIMIT 5,1	 ";
							$res= mysqli_query($con,$sql) ;
							if (mysqli_num_rows($res)>0) { ?>

							<?php while ($row = mysqli_fetch_assoc($res)) {		
						echo"<a href='product.php?subid={$row['sub_id']}'>
							<div class='col-sm-4'>
							<div class='product-image-wrapper'>
									<div class='productinfo text-center'>
										<img src='images/new/salwar12.jpg' height='280px;'/>
										<h2>saree</h2>
										<p>womanista</p>
									</div>
							</div>

						</div></a>"; ?> <?php }}?>



								<!-- JEANS T_SHIRT -->


											<?php 
							if (isset($_GET['subid'])) {
								$sub_id = $_GET['subid'];
							}
							
						$sql = "SELECT sub_id FROM  sub_category WHERE status=1 LIMIT 4,1	 ";
							$res= mysqli_query($con,$sql) ;
							if (mysqli_num_rows($res)>0) { ?>

							<?php while ($row = mysqli_fetch_assoc($res)) {		
						echo"<a href='product.php?subid={$row['sub_id']}'>
							<div class='col-sm-4'>
							<div class='product-image-wrapper'>
									<div class='productinfo text-center'>
										<img src='images/new/ldjeans.jpg' height='280px;'/>
										<h2>saree</h2>
										<p>womanista</p>
									</div>
							</div>

						</div></a>"; ?> <?php }}?>




						
					</div><!--features_items-->







					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">KIDS</h2>
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
						<div class="item active">	





									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<div class="kids1">
																			<?php 
											if (isset($_GET['subid'])) {
												$sub_id = $_GET['subid'];
											}
							
											$sql = "SELECT sub_id FROM  sub_category WHERE status=1 LIMIT 7,1	 ";
											$res= mysqli_query($con,$sql) ;
											if (mysqli_num_rows($res)>0) { ?>

											<?php while ($row = mysqli_fetch_assoc($res)) {
													echo"<a href='product.php?subid={$row['sub_id']}'>
													<img src='images/new/kids1.jpg' alt='kids1' height='250px;'/></a>"; ?> <?php }}?>
													</div>
												</div>
											</div>
										</div>
									</div>




										<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<div class="kids1">
																			<?php 
											if (isset($_GET['subid'])) {
												$sub_id = $_GET['subid'];
											}
							
											$sql = "SELECT sub_id FROM  sub_category WHERE status=1 LIMIT 6,1	 ";
											$res= mysqli_query($con,$sql) ;
											if (mysqli_num_rows($res)>0) { ?>

											<?php while ($row = mysqli_fetch_assoc($res)) {
													echo"<a href='product.php?subid={$row['sub_id']}'>
													<img src='images/new/kids2.jpg' alt='kids1' height='250px;'/></a>"; ?> <?php }}?>
													</div>
												</div>
											</div>
										</div>
									</div>





									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<div class="kids1">
																			<?php 
											if (isset($_GET['subid'])) {
												$sub_id = $_GET['subid'];
											}
							
											$sql = "SELECT sub_id FROM  sub_category WHERE status=1 LIMIT 7,1	 ";
											$res= mysqli_query($con,$sql) ;
											if (mysqli_num_rows($res)>0) { ?>

											<?php while ($row = mysqli_fetch_assoc($res)) {
													echo"<a href='product.php?subid={$row['sub_id']}'>
													<img src='images/new/kids29.jpg' alt='kids1' height='250px;'/></a>"; ?> <?php }}?>
													</div>
												</div>
											</div>
										</div>
									</div>



								</div>


								<div class="item">






										<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<div class="kids1">
																			<?php 
											if (isset($_GET['subid'])) {
												$sub_id = $_GET['subid'];
											}
							
											$sql = "SELECT sub_id FROM  sub_category WHERE status=1 LIMIT 7,1	 ";
											$res= mysqli_query($con,$sql) ;
											if (mysqli_num_rows($res)>0) { ?>

											<?php while ($row = mysqli_fetch_assoc($res)) {
													echo"<a href='product.php?subid={$row['sub_id']}'>
													<img src='images/new/kids1.jpg' alt='kids1' height='250px;'/></a>"; ?> <?php }}?>
													</div>
												</div>
											</div>
										</div>
									</div>




										<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<div class="kids1">
																			<?php 
											if (isset($_GET['subid'])) {
												$sub_id = $_GET['subid'];
											}
							
											$sql = "SELECT sub_id FROM  sub_category WHERE status=1 LIMIT 6,1	 ";
											$res= mysqli_query($con,$sql) ;
											if (mysqli_num_rows($res)>0) { ?>

											<?php while ($row = mysqli_fetch_assoc($res)) {
													echo"<a href='product.php?subid={$row['sub_id']}'>
													<img src='images/new/kids2.jpg' alt='kids1' height='250px;'/></a>"; ?> <?php }}?>
													</div>
												</div>
											</div>
										</div>
									</div>





									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<div class="kids1">
																			<?php 
											if (isset($_GET['subid'])) {
												$sub_id = $_GET['subid'];
											}
							
											$sql = "SELECT sub_id FROM  sub_category WHERE status=1 LIMIT 7,1	 ";
											$res= mysqli_query($con,$sql) ;
											if (mysqli_num_rows($res)>0) { ?>

											<?php while ($row = mysqli_fetch_assoc($res)) {
													echo"<a href='product.php?subid={$row['sub_id']}'>
													<img src='images/new/kids29.jpg' alt='kids1' height='250px;'/></a>"; ?> <?php }}?>
													</div>
												</div>
											</div>
										</div>
									</div>





								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->





					
				</div>



		</div>
		</div>
	</section>


	