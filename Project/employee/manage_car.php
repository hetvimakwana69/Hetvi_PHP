<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage car</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage car</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>car_id</th>
						<th>client_id</th>
						<th>name</th>
						<th>desc</th>
						<th>price</th>
						<th>car_img</th>
						<th>Type</th>
						<th>Fuel_type</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_car_arr as $e)
					{
					?>
					  <tr>
					    <td><?php echo $e->car_id?></td>
						<td><?php echo $e->client_id?></td>
						<td><?php echo $e->name?></td>
						<td><?php echo $e->des?></td>
						<td><?php echo $e->price?></td>
						<td><img src="picture/<?php echo $e->img?>"width="50px" height="50px"></td>
						<td><?php echo $e->type?></td>
						<td><?php echo $e->fuel_type?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_car_id=<?php echo $e->car_id?>" class="btn btn-danger">Delete</a></td>
					  </tr>
					 <?php
					}
					 ?> 
					 
					  
					</tbody>
				  </table>
				</div>
				
	        </div>
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
