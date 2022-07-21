
<html>
   <head>
     <title>$_GET</title>
   </head>
   <body>
       <form action=" " method="get">
	   <p>Name:<input type="text" name="name"/></p>
	   <p>Age:<input type="text" name="age"/></p>
	   <p><input type="submit" name="submit" value="click"/></p>
	   </form>
<?php
    if(isset($_GET['submit']))
	{
	   echo $name=$_REQUEST['name'];
	   echo $age=$_REQUEST['age'];
	}
	 session_start();
	 
	 echo $_SESSION['user'];
	 
?>
</body>
</html>