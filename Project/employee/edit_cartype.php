<?php
include_once('header.php');
?>
 
<script>
  function validate()
  {
	  var cate_id=document.forms["empform"]["cate_id"].value;
	  if(cate_id=="" || cate_id==null)
	  {
		  alert("please fill out cate_id");
		  return false;
	  }
	  var cate_name=document.forms["empform"]["cate_name"].value;
	   if(cate_name=="" || cate_name==null)
	   {
		   alert("please fill out the cate_name");
		   return false;
	   }  
	   var cate_des=document.forms["empform"]["cate_des"].value;
	   if(cate_des=="" || cate_des==null)
	   {
		   alert("please fill out the cate_des");
		   return false;
	   } 
	   var cate_img=document.forms["empform"]["cate_img"].value;
	   if(cate_img=="" || cate_img==null)
	   {
		   alert("please fill out the cate_img");
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
              <label class="control-label">Cate_id</label>
              <input type="text" name="cate_id" value="<?php echo $fetch->cate_id;?>" placeholder="cate_id" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Cate name</label>
              <input type="text" name="cate_name" value="<?php echo $fetch->cate_name;?>" placeholder="cate_name" >
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Category des</label>
              <input type="text" name="cate_des" value="<?php echo $fetch->cate_des;?>" placeholder=" cate_des" >
            </div>
			 <div class="clearfix"> </div>
          
             <div class="clearfix"> </div>
			 <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Cate Image</label>
              <input type="file" name="cate_img" value="<?php echo $fetch->name;?>" placeholder="cate_img" >
			  <img src="picture/cartype/<?php echo $fetch->cate_img;?>" height="80" width="80">
            </div>
			 <div class="clearfix"> </div>
			 
            <div class="vali-form">
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
