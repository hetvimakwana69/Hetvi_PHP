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
					    <th>cate_id</th>
						<th>cate_name</th>
						<th>cate_desc</th>
						<th>cate_image</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_cartype_arr as $ca)
					{
					?>
					  <tr>
					    <td><?php echo $ca->cate_id;?></td>
						<td><?php echo $ca->cate_name;?></td>
						<td><?php echo $ca->cate_des;?></td>
						<td><img src="../web/picture/cartype/<?php echo $ca->cate_img;?>" height="80" width="80"></td>
                        <td><a href="edit_cartype?edit_cate_id=<?php echo $ca->cate_id;?>" class="btn btn-primary">Edit</a></td>
					 <td><a href="delete?del_cate_id=<?php echo $ca->cate_id;?>" class="btn btn-danger">Delete</a></td>
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
