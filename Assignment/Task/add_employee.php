<!DOCTYPE.html>
<html>
 <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <h3>Add Employee</h3>
 </head>
  <body>
     <form action="" method="post" enctype="multipart/form-data">
	     <table>
		    <tr>
			   <td> First Name : </td>
				<td><input type="text" name="firstname" required></td>
			  </tr>
			  
			  <tr>
			   <td> Last Name : </td>
				<td><input type="text" name="lastname" required></td>
			  </tr>
			  
			  <tr>
			   <td> Email : </td>
				<td><input type="text" name="email" required></td>
			  </tr>
			  
			  <tr>
			   <td> Mobile : </td>
				<td><input type="text" name="mobile" required></td>
			  </tr>
			  
			  <tr>
			   <td>Address </td>
				<td><textarea name="address" cols="30" rows="5"></textarea></td>
			  </tr>
			  
			  <tr>
			   <td> Gender : </td>
				<td><input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female</td>
			  </tr>

            <tr>
			 <td> Password : </td>
			 <td><input type="password" name="password" value=""></td>
			</tr>
			
			<tr>
			 <td> Confirm Password : </td>
			 <td><input type="password" name="c_password" value=""></td>
			</tr>
			
			<tr>
			<td>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</td>
			</tr>
		 </table>
	 </form>
  </body>
</html>