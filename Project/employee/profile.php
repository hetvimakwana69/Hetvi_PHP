<?php
if(isset($_SESSION['user_name']))
{
	
}
else
{
	echo "<script>
		  window.location='dashboard';
		  </script>";
}
include_once('header.php');
?>
 <!--banner-->	
		    <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Profile</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--gallery-->
 	 <div class=" profile">

		<div class="profile-bottom">
			<h3><i class="fa fa-user"></i>Profile</h3>
			<div class="profile-bottom-top">
			<div class="col-md-4 profile-bottom-img">
				<img src="images/pic.jpg" alt="">
			</div>
			<div class="col-md-8 profile-text">
				<h3>ID:<?php echo $fetch->e_id;?></h3>
				<table>
				<tr><td>Name</td>  
				<td>:</td>  
				<td><?php echo $fetch->e_name;?></td></tr>
				
				<tr>
				<td>Username</td>
				<td> :</td>
				<td><?php echo $fetch->user_name;?></td>
				</tr>
				<tr>
				<td>Emailid</td>
				<td> :</td>
				<td> <?php echo $fetch->emailid;?></td>
				</tr>
				<tr>
				<td>Address </td>
				<td>:</td>
				<td> <?php echo $fetch->address;?></td>
				</tr>
				<tr>
				<td>Contact no</td>
				<td>:</td>
				<td> <?php echo $fetch->contact_no?></td>
				</tr>
				</table>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="profile-bottom-bottom">
			<div class="col-md-4 profile-fo">
				<h4>23,5k</h4>
				<p>Followers</p>
				<a href="#" class="pro"><i class="fa fa-plus-circle"></i>Follow</a>
			</div>
			<div class="col-md-4 profile-fo">
				<h4>348</h4>
				<p>Following</p>
				<a href="#" class="pro1"><i class="fa fa-user"></i>View Profile</a>
			</div>
			<div class="col-md-4 profile-fo">
				<h4>23,5k</h4>
				<p>Snippets</p>
				<a href="#"><i class="fa fa-cog"></i>Options</a>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="profile-btn">

                <button type="button" href="#" class="btn bg-red">Save changes</button>
           <div class="clearfix"></div>
			</div>
			 
			
		</div>
	</div>
	<!--//gallery-->
<?php
include_once('footer.php');
?>



