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
					  <tr>
					    <td>201</td>
						<td>1</td>
						<td>Maruti suzuki</td>
						<td>good car</td>
						<td>15000</td>
						<td>Maruti Suzuki</td>
						<td>suv</td>
						<td>petrol</td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="#" class="btn btn-danger">Delete</a></td>
					  </tr>
					  
					  <tr>
					    <td>202</td>
					    <td>2</td>
						<td>Mahindra toyota</td>
						<td>good car</td>
						<td>20000</td>
						<td>Mahindra toyota</td>
						<td>sedan</td>
						<td>petrol</td>
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
