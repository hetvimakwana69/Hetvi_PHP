<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage User</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage User</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>u_id</th>
						<th>name</th>
						<th>username</th>
						<th>Emailid</th>
						<th>address</th>
						<th>contact_no</th>
						<th>aadhar card no</th>
						<th>driving licence no</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php  
					foreach($manage_user_arr as $mu)
					{
					?>
					  <tr>
					    <td><?php echo $mu->cust_id;?></td>
						<td><?php echo $mu->name;?></td>
						<td><?php echo $mu->user_name;?></td>
						<td><?php echo $mu->emailid;?></td>
						<td><?php echo $mu->con_no;?></td>
						<td><?php echo $mu->address;?></td>
						<td><?php echo $mu->a_no;?></td>
						<td><?php echo $mu->dl_no;?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="#" class="btn btn-danger">Delete</a></td>
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
