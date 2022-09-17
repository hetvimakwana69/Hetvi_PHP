<?php
include_once('../admin/model.php');

class control extends model
{
	function __construct()
	{
		session_start();
		
		model::__construct();
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			if(isset($_REQUEST['submit']))
			{
				$user_name=$_REQUEST['user_name'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				
				$where=array("user_name"=>$user_name,"pass"=>$pass);
				$run=$this->select_where('employee',$where);
				
				$res=$run->num_rows; 
				if($res==1) 
				{
					
					$_SESSION['user_name']=$user_name;
					
					echo "<script> 
					alert('Login Success') 
					window.location='dashboard';
					</script>";
					
				}
				else
				{
					echo "<script> 
					alert('Login Failed due wrong credebntial') 
					window.location='index';
					</script>";
				}
			}
			include_once('index.php');
			break;
			
			case '/employee_logout':
			unset($_SESSION['user_name']);
			echo "<script>
			alert('Logout success')
			window.location='index'
			</script>";
			
			
			case '/profile':
			$where=array("user_name"=>$_SESSION['user_name']);
			$run=$this->select_where('employee',$where);
			$fetch=$run->fetch_object();
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
			$manage_payment_arr=$this->selectall('payment');
			include_once('manage_payment.php');
			break;
			
			case '/manage_contact':
			$manage_contact_arr=$this->selectall('contact');
			include_once('manage_contact.php');
			break;
			
			case '/manage_car':
			$manage_car_arr=$this->selectall('car');
			include_once('manage_car.php');
			break;
			
			case '/add_cartype':
			if(isset($_REQUEST['submit']))
			{
				$cate_name=$_REQUEST['cate_name'];
				$cate_des=$_REQUEST['cate_des'];
				
				$cate_img=$_FILES['cate_img']['name'];  
				$path='picture/'.$cate_img;
				$dup_file=$_FILES['cate_img']['tmp_name'];
				move_uploaded_file($dup_file,$path);
				
				$arr=array("cate_name"=>$cate_name,"cate_des"=>$cate_des,"cate_img"=>$cate_img);
				
				$res=$this->insert('category',$arr);
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
			$manage_cartype_arr=$this->selectall('category');
			include_once('manage_cartype.php');
			break;
			
			case '/manage_booking':
			$manage_booking_arr=$this->selectall('booking');
			include_once('manage_booking.php');
			break;
			
			case '/delete':
			if(isset($_REQUEST['del_cust_id']))
			 {
				 $cust_id=$_REQUEST['del_cust_id'];
				 $where=array("cust_id"=>$cust_id);
				 $res=$this->delete_where('customer',$where);
				 if($res)
				 {
					echo "<script>
					  alert('Delete success')
					  window.location='manage_user';
					  </script>";
				 }
			 }
			 if(isset($_REQUEST['del_cate_id']))
			 {
				 $cate_id=$_REQUEST['del_cate_id'];
				 $where=array("cate_id"=>$cate_id);
				 
				 $run=$this->select_where('category',$where);
				 $fetch=$run->fetch_object();
				 $cate_img=$fetch->cate_img;
				 $res=$this->delete_where('category',$where);
				 
				 if($res)
				 {
					 unlink('picture/'.$cate_img);
					  echo "<script>
					  alert('Delete success')
					  window.location='manage_cartype';
					  </script>";
				 }
			 }
			 if(isset($_REQUEST['del_cont_id']))
			 {
				 $cont_id=$_REQUEST['del_cont_id'];
				 $where=array("cont_id"=>$cont_id);
				 $res=$this->delete_where('contact',$where);
				 if($res)
				 {
					echo "<script>
					  alert('Delete success')
					  window.location='manage_contact';
					  </script>";
				 }
			 }
			 if(isset($_REQUEST['del_booking_id']))
			 {
				 $booking_id=$_REQUEST['del_booking_id'];
				 $where=array("booking_id"=>$booking_id);
				 $res=$this->delete_where('booking',$where);
				 if($res)
				 {
					echo "<script>
					  alert('Delete success')
					  window.location='manage_booking';
					  </script>";
				 }
			 }
			 if(isset($_REQUEST['del_p_id']))
			 {
				 $p_id=$_REQUEST['del_p_id'];
				 $where=array("p_id"=>$p_id);
				 $res=$this->delete_where('payment',$where);
				 if($res)
				 {
					echo "<script>
					  alert('Delete success')
					  window.location='manage_payment';
					  </script>";
				 }
			 }
			 if(isset($_REQUEST['del_car_id']))
			 {
				 $car_id=$_REQUEST['del_car_id'];
				 $where=array("car_id"=>$car_id);
				 $res=$this->delete_where('car',$where);
				 if($res)
				 {
					  echo "<script>
					  alert('Delete success')
					  window.location='manage_car';
					  </script>";
				 }
			 }
			break;
			
			case '/status':
			
			if(isset($_REQUEST['status_cust_id']))
			{
				$cust_id=$_REQUEST['status_cust_id'];
				$where=array("cust_id"=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				
				if($status=="Block")
				{
					$arr=array("status"=>"Unblock");
					$res=$this->update('customer',$arr,$where);
					if($res)
					{
						echo "<script> 
							alert('Unblock Success') 
							window.location='manage_user';
							</script>";
					}
				}
				else
				{
					$arr=array("status"=>"Block");
					$res=$this->update('customer',$arr,$where);
					if($res)
					{
						unset($_SESSION['email']);
						echo "<script> 
							alert('Block Success') 
							window.location='manage_user';
							</script>";
					}
				}
			}
			
			default :
			include_once('404.php');
			break;
		}
		
	}
}
$obj=new control;
?>