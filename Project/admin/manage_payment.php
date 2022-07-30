<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Payment</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage Payment</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>payment_id</th>
						<th>cust_id</th>
						<th>booking_id</th>
						<th>payment_type</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_payment_arr as $mp)
					{
					?>
					  <tr>
						<td><?php echo $mp->p_id;?></td>
						<td><?php echo $mp->cust_id;?></td>
						<td><?php echo $mp->booking_id;?></td>
						<td><?php echo $mp->payment_type;?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="#" class="btn btn-danger">Delete</a></td>
					  </tr>
					  <?php
					}
					  ?>
					  <tr>
						<td>02</td>
						<td>2</td>
						<td>3</td>
						<td>cash</td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="#" class="btn btn-danger">Delete</a></td>
					  </tr>
					  
					</tbody>
				  </table>
				</div>
				
	        </div>
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
