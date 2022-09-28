<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage cartype</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage cartype</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>car_id</th>
						
						<th>name</th>
						<th>desc</th>
	                    <th>car_img</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_cartype_arr as $c)
					{
					?>
					  <tr>
					    <td><?php echo $c->cate_id;?></td>
						<td><?php echo $c->cate_name;?></td>
						<td><?php echo $c->cate_des;?></td>
						<td><img src="../web/picture/cartype/<?php echo $c->cate_img;?>"width="50px" height="50px"></td>
						<td><a href="edit_cartype?edit_cate_id=<?php echo $c->cate_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_cate_id=<?php echo $c->cate_id;?>" class="btn btn-danger">Delete</a></td>
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
