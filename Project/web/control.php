<?php
 include_once('../admin/model.php');

class control extends model
{
	function __construct()
	{
		model::__construct();
		session_start();
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			$fetcharr=$this->selectall('category');
			include_once('index.php');
			break;
			
			case '/categories':
			include_once('categories.php');
			break;
			
			case '/contact':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$emailid=$_REQUEST['emailid'];
				$cont_no=$_REQUEST['cont_no'];
				$message=$_REQUEST['message'];
				$arr=array("name"=>$name,"emailid"=>$emailid,"cont_no"=>$cont_no,"message"=>$message);
				$res=$this->insert('contact',$arr);
				if($res)
				{
					echo "<script> alert('Inquiry Success') </script>";				
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('contact.php');
			break;
			
			case '/cars':
			$fetcharr=$this->selectall('car');
			include_once('cars.php');
			break;
			
			case '/carsform':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$des=$_REQUEST['des'];
				$capacity=$_REQUEST['capacity'];
				$mileage=$_REQUEST['mileage'];
				$price=$_REQUEST['price'];
				$type=$_REQUEST['type'];
				$fuel_type=$_REQUEST['fuel_type'];
				
			}
			include_once('carsform.php');
			break;
			
			case '/booking':
			include_once('booking.php');
			break;
			
			case '/bookingform':
			include_once('bookingform.php');
			break;
			
			case '/login':
			if(isset($_REQUEST['submit']))
			{
				
				$user_name=$_REQUEST['user_name'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				
				$where=array("user_name"=>$user_name,"pass"=>$pass);
				$run=$this->select_where('customer',$where);
				
				$res=$run->num_rows; 
				if($res==1) 
				{
					$data=$run->fetch_object();
					$status=$data->status;
					if($status=="Unblock")
					{	
					  $_SESSION['user_name']=$user_name;
					
					  echo "<script> 
						alert('Login Success') 
						window.location='index';
						</script>";
					}
					else 
					{	
				      echo  "<script>
					  alert('Status block')
					  window.location='login';
					  </script>";	
					}
				}
                else
				{
					echo "<script> 
					alert('Login Failed due wrong credential') 
					window.location='index';
					</script>";
				}
			}
			include_once('login.php');
			break;
			
			case '/logout':
			unset($_SESSION['user_name']);
			echo "<script>
			alert('Logout success')
			window.location='index'
			</script>";
			
			case '/signup':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$user_name=$_REQUEST['user_name'];
				$emailid=$_REQUEST['emailid'];
				$con_no=$_REQUEST['con_no'];
				$address=$_REQUEST['address'];
				$a_no=$_REQUEST['a_no'];
				$dl_no=$_REQUEST['dl_no'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				
				$arr=array("name"=>$name,"user_name"=>$user_name,"emailid"=>$emailid,"pass"=>$pass,"con_no"=>$con_no,"address"=>$address,"a_no"=>$a_no,"dl_no"=>$dl_no);
				
				
				$res=$this->insert('customer',$arr);
				if($res)
				{
					
					echo "<script> 
					alert('signup success') 
					window.location='index';
					</script>";
				}
				else
				{
					echo "not success";
				}
			}
			include_once('signup.php');
			break;
			
			case '/myprofile':
			$where=array("user_name"=>$_SESSION['user_name']);
			$run=$this->select_where('customer',$where);
			$fetch=$run->fetch_object();
			include_once('myprofile.php');
			break;
			
			case '/editprofile':
			if(isset($_REQUEST['edit_cust_id']))
			{
				$cust_id=$_REQUEST['edit_cust_id'];
				$where=array("cust_id"=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$user_name=$_REQUEST['user_name'];
					$emailid=$_REQUEST['emailid'];
					$con_no=$_REQUEST['con_no'];
					$address=$_REQUEST['address'];
					
					$arr=array("name"=>$name,"user_name"=>$user_name,"emailid"=>$emailid,"con_no"=>$con_no,"address"=>$address);
			        $res=$this->update('customer',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('update success')
						window.location='myprofile'
						</script>";
					}
					
				}
			}
			include_once('editprofile.php');
			break;
			
			default :
			include_once('blog.php');
			break;
		}
		
	}
}
$obj=new control;
?>