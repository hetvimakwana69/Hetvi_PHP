<?php
include_once('Header.php');
?>
       
<body>
	<!-- banner -->
	<div class="banner banner2">
		<div class="container">
			<div class="header">
				<div class="logo">
					<h1><a href="index"><img src="images/car.png" alt=""/>Rent My <span>gallery</span></a></h1>
				</div>
				<div class="top_details">
				<ul>
				
					<?php
				if(isset($_SESSION['user_name']))
				{
				?>
					<button class="btn btn-light"><a href="logout">Logout</a></button>
					<button class="btn btn-light"><a href="myprofile">profile</a></button>
			    <?php	
				}
				else
				{
				?>
				   <button class="btn btn-light"><a href="login">Login</a></button>
					<button class="btn btn-light"><a href="signup">Signup</a></button>
				<?php
				}
				?>
				</ul>
				</ul>
					<div class="search">
						<form>
							<input type="text" value="" placeholder="Search location">
							<input type="submit" value="">
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<?php
			if(isset($_SESSION['user_name']))
			{
			?>
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					  </button>
				</div>
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="categories">Categories</a></li>
						<li><a href="bookingform">Booking</a></li>
						<li class="active"><a href="cars">Available cars</a></li>
						<li><a href="carsform">Cars form</a></li>
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
			<?php
			}
			else
			{
			?>
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					  </button>
				</div>
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="categories">Categories</a></li>
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
			<?php
			}
			?>
		</div>
	</div>
	<!---->
	<div class="gallery">
		<div class="container">
			<div class="gallery-top gal_heading">
				<h2>Booking form</h2>
				<ol class="breadcrumb">
					<li><a href="index">Home</a></li>
					<li class="active">cars</li>
				</ol>
			</div>
			<div class="gallery-bottom">
			<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form action="" name="empform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1"><br>
              <label class="control-label">Booking_id : </label>
              <input type="text" name="booking_id"  placeholder="Name" class="form-control" >
            </div>
			
            <div class="col-md-12 form-group1"><br>
              <label class="control-label">Cust_id : </label>
              <input type="text" name="cust_id"  placeholder="Name" class="form-control">
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1"><br>
              <label class="control-label">Car_id : </label>
              <input type="text" name="car_id"  placeholder="Username" class="form-control">
            </div>
			 <div class="clearfix"> </div>
   
            <div class="col-md-12 form-group1 group-mail"><br>
              <label class="control-label">Booking date : </label>
              <input type="text" name="b_date"  placeholder="Email id" class="form-control">
            </div>
			 <div class="clearfix"> </div>
			 
			 <div class="clearfix"> </div>
			 
            <div class="vali-form">
            <div class="col-md-12 form-group1 form-last"><br>
              <label class="control-label">Booking time : </label>
              <input type="text" name="b_time" placeholder="Contact Number" class="form-control">
            </div>
            <div class="clearfix"> </div>
           </div>
            
             <br>
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" name="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
					<div class="clearfix"> </div>
				
			</div>
		</div>
	</div>
  <script src="js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/jquery.min.js"></script>
	<!----end-gallery---->
	<script src="js/grid.js"></script>
	<script>
		$(function(){
			Grid.init();
		});
	</script>
<?php
include_once('Footer.php');
?>