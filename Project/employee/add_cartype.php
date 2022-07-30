<?php
include_once('header.php');
?>
 
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
  	    
        <form>
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="name" placeholder="Name" required=""><br>
            </div>
			<div class="clearfix"> </div>
			</div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Description</label>
              <input type="text" name="des" placeholder="des" required=""><br><br>
            </div>
			 <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Image</label>
              <input type="file" name="image" required=""><br>
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
