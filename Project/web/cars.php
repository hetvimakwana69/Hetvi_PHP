<?php
include_once('Header.php');
?>

<body>
	<!-- banner -->
	<div class="banner banner2">
		<div class="container">
			<div class="header">
				<div class="logo">
					<h1><a href="index"><img src="images/car.png" width="40px" height="40px" alt=""/>Rent My <span>Car</span></a></h1>
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
						<li><a href="cars">Available cars</a></li>
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
				<h2>Our cars</h2>
				<ol class="breadcrumb">
					<li><a href="index">Home</a></li>
					<li class="active">cars</li>
				</ol>
			</div>
			<div class="gallery-bottom">
				<ul id="og-grid" class="og-grid">
				<?php
				foreach($fetcharr as $data)
				{
				?>
					<li>
					
						<a href="single" data-largesrc="picture/car/<?php echo $data->img;?>" data-title="<?php echo $data->name;?>" data-description="<?php echo $data->des;?> <br>Capacity: <?php echo $data->capacity;?> <br>Mileage: <?php echo $data->mileage;?> <br>Price: <?php echo $data->price;?> <br>Type: <?php echo $data->type;?> <br>Fuel Type: <?php echo $data->fuel_type;?> <br><button>Book Now</button>" >
							<img class="img-responsive" src="picture/car/<?php echo $data->img;?>" alt="img01"/>
							
						</a>
					</li>
			<?php
				}
			?>
					<!--<li>
						<a href="single.html" data-largesrc="images/car7.jpg" data-title=" MARUTI SUZUKI ALTO-K10" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/car7.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="single.html" data-largesrc="images/car4.jpg" data-title="MARUTI SUZUKI SWIFT" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/car4.jpg" alt="img03"/>
						</a>
					</li>
					<li>
						<a href="single.html" data-largesrc="images/car3.jpg" data-title="MARUTI SUZUKI STINGRAY" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/car3.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="single.html" data-largesrc="images/car5.jpg" data-title="CELERIO" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/car5.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="single.html" data-largesrc="images/car6.jpg" data-title="SWIFT DZIRE" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/car6.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="single.html" data-largesrc="images/7.jpg" data-title="AUDI" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/7.jpg" alt="img03"/>
						</a>
					</li>
					<li>
						<a href="single.html" data-largesrc="images/car8.jpg" data-title="MAHINDRA SCORPIO" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/car8.jpg" alt="img01"/>
						</a>
					</li>-->
					<div class="clearfix"> </div>
				</ul>
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