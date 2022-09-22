<?php
include_once('header.php');
?>
 
<script>
  function validate()
  {
	  var car_id=document.forms["empform"]["car_id"].value;
	  if(car_id=="" || car_id==null)
	  {
		  alert("please fill out car_id");
		  return false;
	  }
	  var client_id=document.forms["empform"]["client_id"].value;
	   if(client_id=="" || client_id==null)
	   {
		   alert("please fill out the client_id");
		   return false;
	   }  
	   var name=document.forms["empform"]["name"].value;
	   if(name=="" || name==null)
	   {
		   alert("please fill out the name");
		   return false;
	   } 
	   var des=document.forms["empform"]["des"].value;
	   if(des=="" || des==null)
	   {
		   alert("please fill out the des");
		   return false;
	   } 
	   var price=document.forms["empform"]["price"].value;
	   if(price=="" || price==null)
	   {
		   alert("please fill out the price no");
		   return false;
	   }  
	   var img=document.forms["empform"]["img"].value;
	   if(img=="" || img==null)
	   {
		   alert("please fill out the img");
		   return false;
	   } 
	   var type=document.forms["empform"]["type"].value;
	   if(type=="" || type==null)
	   {
		   alert("please fill out the type");
		   return false;
	   } 
	   var fuel_type=document.forms["empform"]["fuel_type"].value;
	   if(fuel_type=="" || fuel_type==null)
	   {
		   alert("please fill out the fuel_type");
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
              <label class="control-label">Car_id</label>
              <input type="text" name="car_id" value="<?php echo $fetch->car_id;?>" placeholder="car_id" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Client_id</label>
              <input type="text" name="client_id" value="<?php echo $fetch->client_id;?>" placeholder="client_id" >
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Car name</label>
              <input type="text" name="name" value="<?php echo $fetch->name;?>" placeholder="Car name" >
            </div>
			 <div class="clearfix"> </div>
           
            <br>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Description</label>
              <input type="text" name="des" value="<?php echo $fetch->des;?>" placeholder="Description" >
            </div>
			
			 <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Price</label>
              <input type="text" name="price" value="<?php echo $fetch->price;?>" placeholder="Price" >
            </div>
             <div class="clearfix"> </div>
			 <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Car Image</label>
              <input type="file" name="img" value="<?php echo $fetch->name;?>" placeholder="Image" >
			  <img src="picture/<?php echo $fetch->img;?>" height="80" width="80">
            </div>
			 <div class="clearfix"> </div>
			 
            <div class="vali-form">
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Car Type</label>
              <input type="text" name="type" value="<?php echo $fetch->type;?>" placeholder="car type" >
            </div>
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Fuel Type</label>
              <input type="text" name="fuel_type" value="<?php echo $fetch->fuel_type;?>" placeholder="Fuel_type" >
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
