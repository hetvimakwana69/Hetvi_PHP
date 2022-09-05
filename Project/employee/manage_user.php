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
					    <th>Cus_id</th>
						<th>name</th>
						<th>username</th>
						<th>Emailid</th>
						<th>address</th>
						<th>contact_no</th>
						<th>aadhar card no</th>
						<th>driving licence no</th>
						<th>Edit</th>
						<th>Status</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_user_arr as $m)
					{
					?>
					  <tr>
					    <td><?php echo $m->cust_id;?></td>
						<td><?php echo $m->name;?></td>
						<td><?php echo $m->user_name;?></td>
						<td><?php echo $m->emailid;?></td>
						<td><?php echo $m->con_no;?></td>
						<td><?php echo $m->address;?></td>
						<td><?php echo $m->a_no;?></td>
						<td><?php echo $m->dl_no;?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="status?status_cust_id=<?php echo $m->cust_id?>" class="btn btn-danger"><?php echo $m->status;?></a></td>
						<td><a href="delete?del_cust_id=<?php echo $m->cust_id;?>" class="btn btn-primary">Delete</a></td>
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
