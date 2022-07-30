<?php
include_once('../admin/model.php');
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
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/manage_user':
			$manage_user_arr=$this->selectall('customer');
			include_once('manage_user.php');
			break;
			
			case '/manage_payment':
			include_once('manage_payment.php');
			break;
			
			case '/manage_contact':
			include_once('manage_contact.php');
			break;
			
			case '/manage_car':
			include_once('manage_car.php');
			break;
			
			case '/add_cartype':
			if(isset($_REQUEST['submit']))
			{
				$cate_name=$_REQUEST['cate_name'];
				$cate_des=$_REQUEST['cate_des'];
				
				$cate_img=$_FILES['file']['name'];  
				$path='upload/customer/'.$cate_img;
				$dup_file=$_FILES['file']['tmp_name'];
				move_uploaded_file($dup_file,$path);
				
				$arr=array("cate_name"=>$cate_name,"cate_des"=>$cate_des,"cate_img"=>$cate_img);
				
				$res=$this->insert('client',$arr);
				if($res)
				{
					echo  "<script>alert('Register success')</script>";
				}
				else
				{
					echo "not success";
				}
			}
			
			include_once('add_cartype.php');
			break;
			
			case '/manage_cartype':
			include_once('manage_cartype.php');
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