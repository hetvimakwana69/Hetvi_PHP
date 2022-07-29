<?php
include_once('model.php');

class control extends model
{
	function __construct()
	{
		model::__construct();
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			include_once('index.php');
			break;
			case '/profile':
			include_once('profile.php');
			break;
			case '/404':
			include_once('404.php');
			break;
			case '/add_client':
			include_once('add_client.php');
			break;
			case '/add_emp':
            if(isset($_REQUEST['submit']))
			{
				$e_name=$_REQUEST['e_name'];
				$user_name=$_REQUEST['user_name'];
				$emailid=$_REQUEST['emailid'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				$address=$_REQUEST['address'];
				$contact_no=$_REQUEST['contact_no'];
				
				$arr=array("e_name"=>$e_name,"user_name"=>$user_name,"emailid"=>$emailid,"pass"=>$pass,"address"=>$address,"contact_no"=>$contact_no);
				
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
			include_once('add_emp.php');
			break;
			case '/dashboard':
			include_once('dashboard.php');
			break;
			case '/manage_user':
			include_once('manage_user.php');
			break;
			case '/manage_payment':
			include_once('manage_payment.php');
			break;
			case '/manage_feedback':
			include_once('manage_feedback.php');
			break;
			
			case '/manage_emp':
			$manage_emp_arr=$this->selectall('employee');
			include_once('manage_emp.php');
			break;
			
			case '/manage_contact':
			include_once('manage_contact.php');
			break;
			case '/manage_client':
			include_once('manage_client.php');
			break;
			case '/manage_booking':
			include_once('manage_booking.php');
			break;
			default :
			include_once('404.php');
			break;
		}
		
	}
}
$obj=new control;
?>