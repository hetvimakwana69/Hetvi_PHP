<html>
  <head>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
     <title>View Employee</title>
  </head>
  <body>
    <div class="container">
    <h1 align="center"> Employee Table</h1>
    <table align="center"  class="table table-striped">
      <tr>
	      <th>Emp_id</th>
		  <th>First Name</th>
		  <th>Last Name</th>
		  <th>Email</th>
		  <th>Mobile</th>
		  <th>Edit</th>
		  <th>Delete</th>
	  </tr>
	  
              	  <?php
					   foreach($view_employee_arr as $ve)
					   {
					?>
					  <tr>
					  	<td><?php echo $ve->emp_id;?></td>
					    <td><?php echo $ve->firstname;?></td>
						<td><?php echo $ve->lastname;?></td>
						<td><?php echo $ve->email;?></td>
						<td><?php echo $ve->mobile;?></td>
						<td><a href="edit_employee?edit_emp_id=<?php echo $ve->emp_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_emp_id=<?php echo $ve->emp_id;?>"class="btn btn-primary">Delete</a></td>
					  </tr>
					  <?php
					    }
					  ?>
	  
	</table>
   </div>	
  </body>
</html>