<?php
include_once('header.php');
?>
<script>
    function validate()
	{
		var cate_name=document.forms["carform"]["cate_name"].value;
		if(cate_name=="" || cate_name==null)
		{
			alert("please fill out the cate_name");
			return false;
		}
		var cate_des=document.forms["carform"]["cate_des"].value;
		if(cate_des=="" || cate_des==null)
		{
			alert("please fill out the cate_des");
			return false;
		}
		
	}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>add_cartype</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form action="" name="carform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="cate_name" placeholder="Name" ><br>
            </div>
			<div class="clearfix"> </div>
			</div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Description</label>
              <input type="text" name="cate_des" placeholder="des" ><br><br>
            </div>
			 <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Image</label>
              <input type="file" name="cate_img" ><br>
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
