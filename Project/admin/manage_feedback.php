<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Feedback</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage Feedback</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Feedback_id</th>
						<th>cust_id</th>
						<th>comment</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_feedback_arr as $mf)
					{
					?>
					  <tr>
						<td><?php echo $mf->feedback_id;?></td>
						<td><?php echo $mf->cust_id;?></td>
						<td><?php echo $mf->comment;?></td>
						<td><a href="edit_feedback?edit_feedback_id=<?php echo $mf->feedback_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_feed_id=<?php echo $mf->feedback_id;?>" class="btn btn-danger">Delete</a></td>
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
