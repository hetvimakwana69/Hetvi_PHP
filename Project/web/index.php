<?php
     include_once('Header.php');
?>

<body>
	<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="header">
				<div class="logo">
					<h1><a href="index"><img src="images/car.png" width="40px" height="40px" alt=""/>Rent My<span>Car</span></a></h1>
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
				</ul><br>
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
						<li class="active"><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="categories">Categories</a></li>
						<li><a href="bookingform">Booking</a></li>
						<li><a href="cars">Available cars</a></li>
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
						<li><a href="cars">Available cars</a></li>
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
			<?php
			}
			?>
			<div id="top" class="callbacks_container">
				<form action="" method="post" enctype="multipart/form-data">
				<div class="col-md-4"><br>
				<label style="color:white">Pickup Location</label>
				<input type="text" class="form-control">
				</div>
				<div class="col-md-4"><br>
				<label style="color:white">Drop Location</label>
				<input type="text" class="form-control">
				</div>
				<div class="col-md-4"><br>
				<label style="color:white">Pickup date & time</label>
				<input type="date-time" class="form-control">
				</div>
				<div class="col-md-4"><br>
				<label style="color:white">Drop date & time</label>
				<input type="text" class="form-control">
				</div>
				
				<div class="col-md-4"><br>
				<input type="button" value="submit" style="background-color:#f66c53;color:Black;margin-top:25px">
				</div>
				</form>
			</div>
		</div>
	</div>
	<!---->
	<div class="welcome">
		<div class="container">
			<div class="welcome_sec">
				<div class="col-md-6 welcome_info">
					<h3>Welcome</h3>
					<span></span>
					<h4>SELF DRIVE CAR RENTAL IN AHMEDABAD</h4>
					<p>Depending on the occasion and the number of passengers,RentMyCar allows you to hire a rental or self-drive car of your choice, and at an affordable rate.
					Sign up on our website or mobile app, and decide on the rental duration, pickup location, and car type.
					You can use RentMyCar to select the right car for the right purpose in your city. 
					For instance, choose a light and small car to travel during peak business hours, or a powerful SUV for highway driving from Ahmedabad to Udaipur or Mount Abu with your friends.  </p>
					<p>Business travellers can drive into the city from the Sardar Vallabhai Patel International airport, by availing the Ahmedabad airport pick-and-drop service, which will provide a rental taxi at the airport, once your flight lands.
					Additionally, business users can use the self drive cars to pick up their clients or managers.
					RentMyCar offers the joy of driving a car, without any added responsibilities such as car maintenance, paying for car insurance etc.
					It also provides you with the flexibility and convenience of booking a car on the move and also provides Roadside assistance (RSA) in case the car breaks down.</p>
					<a href="about" class="hvr-bounce-to-bottom">Read More</a>
				</div>
				<div class="col-md-6 welcome_pic">
					<h2>Car rental servicies in Ahmedabad</h2>
					<img src="images/car12.jpg" class="img-responsive" alt="" />
					
					<p>With the convenience of online booking on the website or on your smartphone, RentMyCar vehicles have all-India permits. RentMyCar provides service from multiple parking sites across the city so that you can pick up the car you have chosen. 
					</p>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!---->
	<div class="auto_sec">
		<div class="container">
			<h3>Rent A Car</h3>
			<span></span>
			<div class="auto_sec_grids">
				<div class="col-md-8 auto_sec_left">
					
					<h5><a href="">SELF DRIVE CAR RENTAL IN AHMEDABAD</a></h5>
					<p>No more worries about petrol mileage, fuel costs, insurance, and car breakdowns! RentMyCar has enabled driving convenience for travellers around the country and is fast expanding its reach to cities including Ahmedabad, Bangalore,
					Chandigarh, Chennai, Coimbatore, Delhi-NCR, Hyderabad, Jaipur, Kochi, Kolkata, Ludhiana, Mangalore, Mumbai, Mysore, Pune, Siliguri, Vizag, Nagpur, Udaipur, Vijayawada, Surat, Lucknow and Guwahati.  </p>
				</div>
				<div class="col-md-4 auto_sec_right">
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!---->


	<div class="slider btm_sld">
		<div class="container">
			<div class="callbacks2_container">
				<ul class="rslides" id="slider2">
					<li>
						<p></p>
					</li>
					<li>
						<p></p>
					</li>
					<li>
						<p></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!---->

	<!---->
	<div class="feature_sec">
		<div class="container">
			<div class="feature_head">
				<h3>Available cars</h3>
				<span></span>
			</div>
			<ul id="flexiselDemo3">
			<?php 
			foreach($fetcharr as $data)
			{
			?>
				<li>
					<div class="biseller-column">
						<a href="#"><img src="picture/cartype/<?php echo $data->cate_img;?>" height="250px" width="250px" alt=""/></a>
						<h4><?php echo $data->cate_name;?></h4>
						<p><?php echo $data->cate_des;?></p>
						<a class="more hvr-bounce-to-bottom" href="cars">Rent Now</a>
					</div>
				</li>
			<?php 
			}
			?>	
			</ul>
			<div class="clearfix"></div>

		</div>
	</div>
<?php
   include_once('Footer.php');
?>
	