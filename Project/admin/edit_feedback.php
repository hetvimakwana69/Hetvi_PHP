<?php
include_once('header.php');
?>
 
<script>
  function validate()
  {
	  var feedback_id=document.forms["empform"]["feedback_id"].value;
	  if(feedback_id=="" || feedback_id==null)
	  {
		  alert("please fill out feedback_id");
		  return false;
	  }
       if(cust_id=="" || cust_id==null)
	  {
		  alert("please fill out cust_id");
		  return false;
	  }
	   var comment=document.forms["empform"]["comment"].value;
	   if(comment=="" || comment==null)
	   {
		   alert("please fill out the comment");
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
              <label class="control-label">Feedback_id</label>
              <input type="text" name="feedback_id" value="<?php echo $fetch->feedback_id;?>" placeholder="Name" >
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Cust_id</label>
              <input type="text" name="cust_id" value="<?php echo $fetch->cust_id;?>" placeholder="Name" >
            </div>
            <div class="clearfix"> </div>
            </div>
			 <div class="clearfix"> </div>
           <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Comment</label>
              <textarea class="form-control" name="comment" placeholder="Address" ><?php echo $fetch->comment;?></textarea>
            </div>
            <br>
             <div class="clearfix"> </div>
			 
			 <div class="clearfix"> </div>
			 
            <div class="vali-form">

            <div class="clearfix"> </div>
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
