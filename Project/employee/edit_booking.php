<?php
include_once('header.php');
?>
 
<script>
  function validate()
  {
	  var booking_id=document.forms["empform"]["booking_id"].value;
	  if(booking_id=="" || booking_id==null)
	  {
		  alert("please fill out booking_id");
		  return false;
	  }
	 
	  
	  var cust_id=document.forms["empform"]["cust_id"].value;
	   if(cust_id=="" || cust_id==null)
	   {
		   alert("please fill out the cust_id");
		   return false;
	   }  
	   var car_id=document.forms["empform"]["car_id"].value;
	   if(car_id=="" || car_id==null)
	   {
		   alert("please fill out the car_id");
		   return false;
	   } 

	   var b_date=document.forms["empform"]["b_date"].value;
	   if(b_date=="" || b_date==null)
	   {
		   alert("please fill out the b_date");
		   return false;
	   } 
	   var b_time=document.forms["empform"]["b_time"].value;
	   if(b_time=="" || b_time==null)
	   {
		   alert("please fill out the b_time");
		   return false;
	   }
  }
</script>
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Validation</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form action="" name="empform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">Booking_id</label>
              <input type="text" name="booking_id" value="<?php echo $fetch->booking_id;?>" placeholder="Name" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Cust_id</label>
              <input type="text" name="cust_id" value="<?php echo $fetch->cust_id;?>" placeholder="Name" >
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Car_id</label>
              <input type="text" name="car_id" value="<?php echo $fetch->car_id;?>" placeholder="Username" >
            </div>
			 <div class="clearfix"> </div>
           
            <br>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Booking date</label>
              <input type="text" name="b_date" value="<?php echo $fetch->b_date;?>" placeholder="Email id" >
            </div>
			 <div class="clearfix"> </div>
			 
			 <div class="clearfix"> </div>
			 
            <div class="vali-form">
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Booking time</label>
              <input type="text" name="b_time" value="<?php echo $fetch->b_time;?>" placeholder="Contact Number" >
            </div>
            <div class="clearfix"> </div>
           </div>
            
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" name="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
<?php
include_once('footer.php');
?>
