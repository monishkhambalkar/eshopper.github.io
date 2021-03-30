 <?php

include ("config.php");


include 'header.php';

 ?>



<body>
	
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form method="post" action="contactdata.php">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" value="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="email" value="email" class="form-control" required="required" placeholder="Email">
				            </div>

				              <div class="form-group col-md-12">
				                <input type="text" name="query" value="query" class="form-control" required="required" rows="4" placeholder="query">
				            </div>

				              <div class="form-group col-md-6">
				                <input type="text" name="mobile" value="mobile" class="form-control" required="required" placeholder="mobile">
				            </div>
				          
				              <div class="form-group col-md-6">
				                <input type="date" name="date" value="date" class="form-control" required="required"  placeholder="date">
				            </div>
				            <div>                     
				           <button type="submit"  style="background-color: #FE980F; border: none; color: white; height: 30px; width: 80px; margin-left: 15px;" name="submit" value="submit">send</button>
				           
				           </div>  
				        </form>
				        <br>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>E-Shopper Inc.</p>
							<p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
							<p>Newyork USA</p>
							<p>Mobile: +2346 17 38 93</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: info@e-shopper.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
 <?php

include 'footer.php';

 ?>






<?php

if (isset($_POST['submit']))
 {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];




	$result=mysqli_query($mysqli,"INSERT INTO contactdata VALUES('$name','$email','$subject','$message')");

	if ($result) {
		echo "success";
	}else{
		echo "failed";
	}


}





?>
















	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>