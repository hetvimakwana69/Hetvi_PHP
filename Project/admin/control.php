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
			
			case '/edit_client':
			if(isset($_REQUEST['edit_client_id']))
			{
				$client_id=$_REQUEST['edit_client_id'];
				$where=array("client_id"=>$client_id);
				$run=$this->select_where('client',$where);
				$fetch=$run->fetch_object();
				if(isset($_REQUEST['submit']))
				{
					$client_id=$_REQUEST['client_id'];
					$name=$_REQUEST['name'];
					$user_name=$_REQUEST['user_name'];
					$emailid=$_REQUEST['emailid'];
					$address=$_REQUEST['address'];
					$contact_no=$_REQUEST['contact_no'];
					$a_no=$_REQUEST['a_no'];
					$dl_no=$_REQUEST['dl_no'];
					$puc=$_REQUEST['puc'];
					$insurance=$_REQUEST['insurance'];
					
					$arr=array("client_id"=>$client_id,"name"=>$name,"user_name"=>$user_name,"emailid"=>$emailid,"address"=>$address,"contact_no"=>$contact_no,"a_no"=>$a_no,"dl_no"=>$dl_no,"puc"=>$puc,"insurance"=>$insurance);
					$res=$this->update('client',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('update success')
						window.location='manage_client';
						</script>";
					}
				}
			}
			include_once('edit_client.php');
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
			
			case '/edit_emp':
			if(isset($_REQUEST['edit_e_id']))
			{
				$e_id=$_REQUEST['edit_e_id'];
				$where=array("e_id"=>$e_id);
				$run=$this->select_where('employee',$where);
				$fetch=$run->fetch_object();
				if(isset($_REQUEST['submit']))
				{
					$e_id=$_REQUEST['e_id'];
					$e_name=$_REQUEST['e_name'];
					$user_name=$_REQUEST['user_name'];
					$emailid=$_REQUEST['emailid'];
					$address=$_REQUEST['address'];
					$contact_no=$_REQUEST['contact_no'];
					
					$arr=array("e_id"=>$e_id,"e_name"=>$e_name,"user_name"=>$user_name,"emailid"=>$emailid,"address"=>$address,"contact_no"=>$contact_no);
					$res=$this->update('employee',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('update success')
						window.location='manage_emp';
						</script>";
					}
				}
			}
			include_once('edit_emp.php');
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/manage_user':
			$manage_user_arr=$this->selectall('customer');
			include_once('manage_user.php');
			break;
			
			case '/edit_user':
			if(isset($_REQUEST['edit_cust_id']))
			{
				$cust_id=$_REQUEST['edit_cust_id'];
				$where=array("cust_id"=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				if(isset($_REQUEST['submit']))
				{
					$cust_id=$_REQUEST['cust_id'];
					$name=$_REQUEST['name'];
					$user_name=$_REQUEST['user_name'];
					$emailid=$_REQUEST['emailid'];
					$address=$_REQUEST['address'];
					$con_no=$_REQUEST['con_no'];
					$a_no=$_REQUEST['a_no'];
					$dl_no=$_REQUEST['dl_no'];
					
					$arr=array("cust_id"=>$cust_id,"name"=>$name,"user_name"=>$user_name,"emailid"=>$emailid,"address"=>$address,"con_no"=>$con_no,"a_no"=>$a_no,"dl_no"=>$dl_no);
					$res=$this->update('customer',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('update success');
						window.location='manage_user';
						</script>";
					}
				}
			}
			include_once('edit_user.php');
			break;
			
			case '/manage_payment':
			$manage_payment_arr=$this->selectall('payment');
			include_once('manage_payment.php');
			break;
			
			case '/edit_payment':
			if(isset($_REQUEST['edit_p_id']))
			{
				
					$booking_id=$_REQUEST['edit_p_id'];
					$where=array("booking_id"=>$booking_id);
					$run=$this->select_where('payment',$where);
					$fetch=$run->fetch_object();
					if(isset($_REQUEST['submit']))
					{
						$p_id=$_REQUEST['p_id'];
						$cust_id=$_REQUEST['cust_id'];
						$booking_id=$_REQUEST['booking_id'];
						$payment_type=$_REQUEST['payment_type'];
                        $arr=array("p_id"=>$p_id,"cust_id"=>$cust_id,"booking_id"=>$booking_id,"payment_type"=>$payment_type);
						$res=$this->update('payment',$arr,$where);
						if($res)
						{
							echo "<script>
							alert('update success');
							window.location='manage_payment';
							</script>";
						}
					}
			}
			include_once('edit_payment.php');
			break;
			
			case '/manage_feedback':
			$manage_feedback_arr=$this->selectall('feedback');
			include_once('manage_feedback.php');
			break;
			
			case '/edit_feedback':
			if(isset($_REQUEST['edit_feedback_id']))
			{
				$feedback_id=$_REQUEST['edit_feedback_id'];
				$where=array("feedback_id"=>$feedback_id);
				$run=$this->select_where('feedback',$where);
				$fetch=$run->fetch_object();
				if(isset($_REQUEST['submit']))
				{
					$feedback_id=$_REQUEST['feedback_id'];
					$cust_id=$_REQUEST['cust_id'];
					$comment=$_REQUEST['comment'];
					$arr=array("feedback_id"=>$feedback_id,"cust_id"=>$cust_id,"comment"=>$comment);
					$res=$this->update('feedback',$arr,$where);
					if($res)
					{
					    echo "<script>
						alert('update success');
						window.location='manage_feedback';
						</script>";
					}
				}
			}
			include_once('edit_feedback.php');
			break;
			
			case '/manage_emp':
			$manage_emp_arr=$this->selectall('employee');
			include_once('manage_emp.php');
			break;
			
			case '/manage_contact':
			$manage_contact_arr=$this->selectall('contact');
			include_once('manage_contact.php');
			break;
			
			case '/edit_contact':
			if(isset($_REQUEST['edit_cont_id']))
			{
				
					$cont_id=$_REQUEST['edit_cont_id'];
					$where=array("cont_id"=>$cont_id);
					$run=$this->select_where('contact',$where);
					$fetch=$run->fetch_object();
					if(isset($_REQUEST['submit']))
					{
						$cont_id=$_REQUEST['cont_id'];
						$name=$_REQUEST['name'];
						$emailid=$_REQUEST['emailid'];
						$cont_no=$_REQUEST['cont_no'];
						$message=$_REQUEST['message'];
                        $arr=array("cont_id"=>$cont_id,"name"=>$name,"emailid"=>$emailid,"cont_no"=>$cont_no,"message"=>$message);
						$res=$this->update('contact',$arr,$where);
						if($res)
						{
							echo "<script>
							alert('update success');
							window.location='manage_contact';
							</script>";
						}
					}
			}
			include_once('edit_contact.php');
			break;
			
			case '/manage_client':
			$manage_client_arr=$this->selectall('client');
			include_once('manage_client.php');
			break;
			
			case '/manage_booking':
			$manage_booking_arr=$this->selectall('booking');
			include_once('manage_booking.php');
			break;
			
			case '/edit_booking':
			if(isset($_REQUEST['edit_booking_id']))
			{
				
					$booking_id=$_REQUEST['edit_booking_id'];
					$where=array("booking_id"=>$booking_id);
					$run=$this->select_where('booking',$where);
					$fetch=$run->fetch_object();
					if(isset($_REQUEST['submit']))
					{
						$booking_id=$_REQUEST['booking_id'];
						$cust_id=$_REQUEST['cust_id'];
						$car_id=$_REQUEST['car_id'];
						$b_date=$_REQUEST['b_date'];
						$b_time=$_REQUEST['b_time'];
                        $arr=array("booking_id"=>$booking_id,"cust_id"=>$cust_id,"car_id"=>$car_id,"b_date"=>$b_date,"b_time"=>$b_time);
						$res=$this->update('booking',$arr,$where);
						if($res)
						{
							echo "<script>
							alert('update success');
							window.location='manage_booking';
							</script>";
						}
					}
			}
			include_once('edit_booking.php');
			break;
			
			case '/manage_car':
			$manage_car_arr=$this->selectall('car');
			include_once('manage_car.php');
			break;
			
			case '/edit_car':
			if(isset($_REQUEST['edit_car_id']))
			{
				
					$car_id=$_REQUEST['edit_car_id'];
					$where=array("car_id"=>$car_id);
					$run=$this->select_where('car',$where);
					$fetch=$run->fetch_object();
					$old_file=$fetch->img;
					if(isset($_REQUEST['submit']))
					{
						$car_id=$_REQUEST['car_id'];
						$client_id=$_REQUEST['client_id'];
						$name=$_REQUEST['name'];
						$des=$_REQUEST['des'];
						$capacity=$_REQUEST['capacity'];
						$mileage=$_REQUEST['mileage'];
						$price=$_REQUEST['price'];
						$type=$_REQUEST['type'];
						$fuel_type=$_REQUEST['fuel_type'];
						if($_FILES['img']['size']>0)
						{
							$img=$_FILES['img']['name'];
							$path='../web/picture/car/'.$img;
							$dup_file=$_FILES['img']['tmp_name'];
							move_uploaded_file($dup_file,$path);
							
							$arr=array("car_id"=>$car_id,"client_id"=>$client_id,"name"=>$name,"des"=>$des,"capacity"=>$capacity,"mileage"=>$mileage,"price"=>$price,"type"=>$type,"fuel_type"=>$fuel_type,"img"=>$img);
							$res=$this->update('car',$arr,$where);
							if($res)
							{
								unlink('../web/picture/car/'.$old_file);
								echo "<script>
								alert('update success');
								window.location='manage_car';
								</script>";
							}
						}
						else
						{
							$arr=array("car_id"=>$car_id,"client_id"=>$client_id,"name"=>$name,"des"=>$des,"capacity"=>$capacity,"mileage"=>$mileage,"price"=>$price,"img"=>$img,"type"=>$type,"fuel_type"=>$fuel_type);
							$res=$this->update('car',$arr,$where);
							if($res)
							{
								echo "<script>
								alert('update success');
								window.location='manage_car';
								</script>";
							}
						}
					}
			}
			include_once('edit_car.php');
			break;
			
			case '/manage_cartype':
			$manage_cartype_arr=$this->selectall('category');
			include_once('manage_cartype.php');
			break;
			
			case '/edit_cartype':
			if(isset($_REQUEST['edit_cate_id']))
			{
				
					$cate_id=$_REQUEST['edit_cate_id'];
					$where=array("cate_id"=>$cate_id);
					$run=$this->select_where('category',$where);
					$fetch=$run->fetch_object();
					$old_file=$fetch->cate_img;
					if(isset($_REQUEST['submit']))
					{
						$cate_id=$_REQUEST['cate_id'];
						$cate_name=$_REQUEST['cate_name'];
						$cate_des=$_REQUEST['cate_des'];
						if($_FILES['cate_img']['size']>0)
						{
							$cate_img=$_FILES['cate_img']['name'];
							$path='../web/picture/cartype/'.$cate_img;
							$dup_file=$_FILES['cate_img']['tmp_name'];
							move_uploaded_file($dup_file,$path);
							
							$arr=array("cate_id"=>$cate_id,"cate_name"=>$cate_name,"cate_des"=>$cate_des,"cate_img"=>$cate_img);
							$res=$this->update('category',$arr,$where);
							if($res)
							{
								unlink('../web/picture/cartype/'.$old_file);
								echo "<script>
								alert('update success');
								window.location='manage_cartype';
								</script>";
							}
						}
						else
						{
							$arr=array("cate_id"=>$cate_id,"cate_name"=>$cate_name,"cate_des"=>$cate_des,"cate_img"=>$cate_img);
							$res=$this->update('category',$arr,$where);
							if($res)
							{
								echo "<script>
								alert('update success');
								window.location='manage_cartype';
								</script>";
							}
						}
					}
			}
			include_once('edit_cartype.php');
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
				 
				 $run=$this->select_where('car',$where);
				 $fetch=$run->fetch_object();
				 $img=$fetch->img;
				 
				 $res=$this->delete_where('car',$where);
				 if($res)
				 {
					  unlink('../web/picture/car/'.$img);
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
				 $run=$this->select_where('category',$where);
				 $fetch=$run->fetch_object();
				 $cate_img=$fetch->cate_img;
				 
				 $res=$this->delete_where('category',$where);
				 if($res)
				 {
					 unlink('../web/picture/cartype/'.$cate_img);
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