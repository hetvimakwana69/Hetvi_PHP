<?php
include_once('model.php');

class control extends model
{
	function __construct()
	{
		session_start();
		model::__construct();
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
		    case '/edit_employee':
			if(isset($_REQUEST['edit_emp_id']))
			{
				$emp_id=$_REQUEST['edit_emp_id'];
				$where=array("emp_id"=>$emp_id);
				$run=$this->select_where('employee',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$firstname=$_REQUEST['firstname'];
					$lastname=$_REQUEST['lastname'];
					$email=$_REQUEST['email'];
					$mobile=$_REQUEST['mobile'];
					$address=$_REQUEST['address'];
					$gender=$_REQUEST['gender'];
					$password=$_REQUEST['password'];
					$password=md5($password);
					$password=$_REQUEST['c_password'];
					$c_password=md5($password);
				
				
				    $arr=array("firstname"=>$firstname,"lastname"=>$lastname,"email"=>$email,"mobile"=>$mobile,"address"=>$address,"gender"=>$gender,"password"=>$password,"c_password"=>$c_password);
				
			        $res=$this->update('employee',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('update success');
						window.location='view_employee';
						</script>";
					}
					
				}
			}
			include_once('edit_employee.php');
			break;
			
			
			case '/add_employee':
            if(isset($_REQUEST['submit']))
			{
				$firstname=$_REQUEST['firstname'];
				$lastname=$_REQUEST['lastname'];
				$email=$_REQUEST['email'];
				$mobile=$_REQUEST['mobile'];
				$address=$_REQUEST['address'];
				$gender=$_REQUEST['gender'];
				$password=$_REQUEST['password'];
				$password=md5($password);
		        $password=$_REQUEST['c_password'];
				$c_password=md5($password);
				
				
				$arr=array("firstname"=>$firstname,"lastname"=>$lastname,"email"=>$email,"mobile"=>$mobile,"address"=>$address,"gender"=>$gender,"password"=>$password,"c_password"=>$c_password);
				
				$res=$this->insert('employee',$arr);
				if($res)
				{
					echo  "<script>alert('Register success')</script>";
				}
				else
				{
					echo "not success";
				}
			}
			include_once('add_employee.php');
			break;
			
			case '/view_employee':
			$view_employee_arr=$this->selectall('employee');
			include_once('view_employee.php');
			break;
			
			case '/delete':
			if(isset($_REQUEST['del_emp_id']))
			{
				$emp_id=$_REQUEST['del_emp_id'];
				$where=array("emp_id"=>$emp_id);
				$res=$this->delete_where('employee',$where);
				if($res)
				{
					echo "<script>
					  alert('Delete success')
					  window.location='view_employee';
					  </script>";
				}
			 }
			break;
			
			
			
			default :
			include_once('Assesment.php');
			break;
		}
		
	}
}
$obj=new control;
?>