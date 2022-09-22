<?php
include_once('header.php');
?>
 
<script>
  function validate()
  {
	  var cont_id=document.forms["empform"]["cont_id"].value;
	  if(cont_id=="" || cont_id==null)
	  {
		  alert("please fill out cont_id");
		  return false;
	  }
	  var name=document.forms["empform"]["name"].value;
	  if(name=="" || name==null)
	  {
		  alert("please fill out name");
		  return false;
	  }


	   var emailid=document.forms["empform"]["emailid"].value;
	   if(emailid=="" || emailid==null)
	   {
		   alert("please fill out the emailid");
		   return false;
	   } 

	   
	   var contact_no=document.forms["empform"]["contact_no"].value;
	   if(contact_no=="" || contact_no==null)
	   {
		   alert("please fill out the contact no");
		   return false;
	   }
	   var message=document.forms["empform"]["message"].value;
	   if(message=="" || message==null)
	   {
		   alert("please fill out the message");
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
              <label class="control-label">Contact_id</label>
              <input type="text" name="cont_id" value="<?php echo $fetch->cont_id;?>" placeholder="Name" >
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="name" value="<?php echo $fetch->name;?>" placeholder="Name" >
            </div>
            <div class="clearfix"> </div>
            </div>
			 <div class="clearfix"> </div>
           
            <br>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email id</label>
              <input type="text" name="emailid" value="<?php echo $fetch->emailid;?>" placeholder="Email id" >
            </div>
             <div class="clearfix"> </div>
			 
			 <div class="clearfix"> </div>
			 
            <div class="vali-form">
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Contact Number</label>
              <input type="text" name="cont_no" value="<?php echo $fetch->cont_no;?>" placeholder="Contact Number" >
            </div>
            <div class="clearfix"> </div>
           </div>
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Message</label>
              <textarea class="form-control" name="message" placeholder="Address" ><?php echo $fetch->message;?></textarea>
            </div>
             <div class="vali-form vali-form1">
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
