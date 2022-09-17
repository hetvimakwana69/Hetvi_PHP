<?php
include_once('header.php');
?>
 
<script>
  function validate()
  {
	  var e_name=document.forms["empform"]["e_name"].value;
	  if(e_name=="" || e_name==null)
	  {
		  alert("please fill out e_name");
		  return false;
	  }
	  var alpha=/^[A-Za-z]+$/;
	  if(!alpha.test(e_name))
	  {
		  alert("please fill only character");
		  return false;
	  }
	  
	  var user_name=document.forms["empform"]["user_name"].value;
	   if(user_name=="" || user_name==null)
	   {
		   alert("please fill out the username");
		   return false;
	   }  
	   var emailid=document.forms["empform"]["emailid"].value;
	   if(emailid=="" || emailid==null)
	   {
		   alert("please fill out the emailid");
		   return false;
	   } 
       var mail=/^[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
       if(!mail.test(emailid))
	   {
		   alert("please proper email id");
		   return false;
	   }
	   
	   var address=document.forms["empform"]["address"].value;
	   if(address=="" || address==null)
	   {
		   alert("please fill out the address");
		   return false;
	   } 
	   var contact_no=document.forms["empform"]["contact_no"].value;
	   if(contact_no=="" || contact_no==null)
	   {
		   alert("please fill out the contact no");
		   return false;
	   }
      var phone=/^[0-9]{10,11}$/;
       if(!phone.test(contact_no))
	   {
		   alert("please proper phone no");
		   return false;
	   }		   
	   var pass=document.forms["empform"]["pass"].value;
	   if(pass=="" || pass==null)
	   {
		   alert("please fill out the password");
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
              <label class="control-label">Name</label>
              <input type="text" name="e_name" placeholder="Name" >
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">User_name</label>
              <input type="text" name="user_name" placeholder="Username" >
            </div>
			 <div class="clearfix"> </div>
           
            <br>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email id</label>
              <input type="text" name="emailid" placeholder="Email id" >
            </div>
			
			 <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Address</label>
              <textarea class="form-control" name="address" placeholder="Address" ></textarea>
            </div>
             <div class="clearfix"> </div>
			 
			 <div class="clearfix"> </div>
			 
            <div class="vali-form">
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Contact Number</label>
              <input type="text" name="contact_no" placeholder="Contact Number" >
            </div>
            <div class="clearfix"> </div>
           </div>

             <div class="vali-form vali-form1">
            <div class="col-md-12 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" name="pass" placeholder="Create a password" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
             
             <div class="clearfix"> </div>
          
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
