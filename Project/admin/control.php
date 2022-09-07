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
			case '/index':
			if(isset($_REQUEST['submit']))
			{
				$user_name=$_REQUEST['user_name'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				
				$where=array("user_name"=>$user_name,"pass"=>$pass);
				$run=$this->select_where('admin',$where);
				
				$res=$run->num_rows; 
				if($res==1) 
				{
					
					$_SESSION['admin']=$user_name;
					
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
			
			case '/admin_logout':
			unset($_SESSION['admin']);
			echo "<script>
			alert('Logout success')
			window.location='index'
			</script>";
			
			include_once('profile.php');
			break;
			
			case '/profile':
			$where=array("user_name"=>$_SESSION['admin']);
			$run=$this->select_where('admin',$where);
			$fetch=$run->fetch_object();
			include_once('profile.php');
			break;
			
			case '/404':
			include_once('404.php');
			break;
			
			
			
			case '/add_client':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$user_name=$_REQUEST['user_name'];
				$emailid=$_REQUEST['emailid'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				$address=$_REQUEST['address'];
				$contact_no=$_REQUEST['contact_no'];
				$a_no=$_REQUEST['a_no'];
				$dl_no=$_REQUEST['dl_no'];
				$puc=$_REQUEST['puc'];
				$insurance=$_REQUEST['insurance'];
				
				$arr=array("name"=>$name,"user_name"=>$user_name,"emailid"=>$emailid,"pass"=>$pass,"address"=>$address,"contact_no"=>$contact_no,"a_no"=>$a_no,"dl_no"=>$dl_no,"puc"=>$puc,"insurance"=>$insurance);
				
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
			$manage_user_arr=$this->selectall('customer');
			include_once('manage_user.php');
			break;
			
			case '/manage_payment':
			$manage_payment_arr=$this->selectall('payment');
			include_once('manage_payment.php');
			break;
			
			case '/manage_feedback':
			$manage_feedback_arr=$this->selectall('feedback');
			include_once('manage_feedback.php');
			break;
			
			case '/manage_emp':
			$manage_emp_arr=$this->selectall('employee');
			include_once('manage_emp.php');
			break;
			
			case '/manage_contact':
			$manage_contact_arr=$this->selectall('contact');
			include_once('manage_contact.php');
			break;
			
			case '/manage_client':
			$manage_client_arr=$this->selectall('client');
			include_once('manage_client.php');
			break;
			
			case '/manage_booking':
			$manage_booking_arr=$this->selectall('booking');
			include_once('manage_booking.php');
			break;
			
			case '/manage_car':
			$manage_car_arr=$this->selectall('car');
			include_once('manage_car.php');
			break;
			
			case '/manage_cartype':
			$manage_cartype_arr=$this->selectall('category');
			include_once('manage_cartype.php');
			break;
			
			
			case '/delete':
			if(isset($_REQUEST['del_employee_id']))
			{
				$e_id=$_REQUEST['del_employee_id'];
				$where=array("e_id"=>$e_id);
				$res=$this->delete_where('employee',$where);
				if($res)
				{
					echo "<script>
					  alert('Delete success')
					  window.location='manage_emp';
					  </script>";
				}
			 }
			 
			 if(isset($_REQUEST['del_client_id']))
			 {
				 $client_id=$_REQUEST['del_client_id'];
				 $where=array("client_id"=>$client_id);
				 $res=$this->delete_where('client',$where);
				 if($res)
				 {
					echo "<script>
					  alert('Delete success')
					  window.location='manage_client';
					  </script>";
				 }
			 }
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
			 if(isset($_REQUEST['del_cont_id']))
			 {
				 $cont_id=$_REQUEST['del_cont_id'];
				 $where=array("cont_id"=>$contact_id);
				 $res=$this->delete_where('contact',$where);
				 if($res)
				 {
					echo "<script>
					  alert('Delete success')
					  window.location='manage_contact';
					  </script>";
				 }
			 }
			 if(isset($_REQUEST['del_feed_id']))
			 {
				 $feedback_id=$_REQUEST['del_feed_id'];
				 $where=array("feedback_id"=>$feedback_id);
				 $res=$this->delete_where('feedback',$where);
				 if($res)
				 {
					  echo "<script>
					  alert('Delete success')
					  window.location='manage_feedback';
					  </script>";
				 }
			 }
			  if(isset($_REQUEST['del_booking_id']))
			 {
				 $booking_id=$_REQUEST['del_booking_id_id'];
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
			  if(isset($_REQUEST['del_cate_id']))
			 {
				 $cate_id=$_REQUEST['del_cate_id'];
				 $where=array("cate_id"=>$cate_id);
				 $res=$this->delete_where('category',$where);
				 if($res)
				 {
					  echo "<script>
					  alert('Delete success')
					  window.location='manage_cartype';
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
			
			if(isset($_REQUEST['status_e_id']))
			{
				$e_id=$_REQUEST['status_e_id'];
				$where=array("e_id"=>$e_id);
				$run=$this->select_where('employee',$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				
				if($status=="Block")
				{
					$arr=array("status"=>"Unblock");
					$res=$this->update('employee',$arr,$where);
					if($res)
					{
						echo "<script> 
							alert('Unblock Success') 
							window.location='manage_emp';
							</script>";
					}
				}
				else
				{
					$arr=array("status"=>"Block");
					$res=$this->update('employee',$arr,$where);
					if($res)
					{
						unset($_SESSION['email']);
						echo "<script> 
							alert('Block Success') 
							window.location='manage_emp';
							</script>";
					}
				}
			}
			
			break;
			
			default :
			include_once('404.php');
			break;
		}
		
	}
}
$obj=new control;
?>