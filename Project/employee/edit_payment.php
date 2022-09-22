<?php
include_once('header.php');
?>
 
<script>
  function validate()
  {
	  var p_id=document.forms["empform"]["p_id"].value;
	  if(p_id=="" || p_id==null)
	  {
		  alert("please fill out p_id");
		  return false;
	  }
	 
	  
	  var cust_id=document.forms["empform"]["cust_id"].value;
	   if(cust_id=="" || cust_id==null)
	   {
		   alert("please fill out the cust_id");
		   return false;
	   }  
	   var booking_id=document.forms["empform"]["booking_id"].value;
	   if(booking_id=="" || booking_id==null)
	   {
		   alert("please fill out the booking_id");
		   return false;
	   } 

	   var payment_type=document.forms["empform"]["payment_type"].value;
	   if(payment_type=="" || payment_type==null)
	   {
		   alert("please fill out the payment_type");
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
              <label class="control-label">P_id</label>
              <input type="text" name="p_id" value="<?php echo $fetch->p_id;?>" placeholder="Name" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Cust_id</label>
              <input type="text" name="cust_id" value="<?php echo $fetch->cust_id;?>" placeholder="Name" >
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Booking_id</label>
              <input type="text" name="booking_id" value="<?php echo $fetch->booking_id;?>" placeholder="Username" >
            </div>
			 <div class="clearfix"> </div>
           
            <br>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Payment Type</label>
              <input type="text" name="payment_type" value="<?php echo $fetch->payment_type;?>" placeholder="Email id" >
            </div>
			 <div class="clearfix"> </div>
			 
			 <div class="clearfix"> </div>
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
