<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Contact</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage Contact</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>Contact_id </th>
						<th>Name</th>
						<th>Emailid</th>
						<th>Contact_no</th>
						<th>Message</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_contact_arr as $a)
					{
					?>
					  <tr>
					    <td><?php echo $a->cont_id;?></td>
						<td><?php echo $a->name;?></td>
						<td><?php echo $a->emailid;?></td>
						<td><?php echo $a->cont_no;?></td>
						<td><?php echo $a->message;?></td>
						<td><a href="edit_contact?edit_cont_id=<?php echo $a->cont_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_cont_id=<?php echo $a->cont_id;?>" class="btn btn-danger">Delete</a></td>
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
