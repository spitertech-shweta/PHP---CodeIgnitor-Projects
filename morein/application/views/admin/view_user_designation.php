

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 10%; padding-left:20%; padding-right: 20%;">     
					
		<div class="col-md-9">
				<div class="form-group">
				<a href="<?php echo base_url().'admin/show_user_designation/'?>"> <button type="button" class="btn btn-primary">SHOW USER DESIGNATION</button></a>
				<br><br><br>
                <input type="hidden" class="form-control" id="user_designation_id" name="user_designation_id"  value="<?php echo $view_user_designation->user_designation_id; ?>">
                <input type="text" class="form-control" id="user_designation" name="user_designation"  value="<?php echo $view_user_designation->user_designation; ?>" readonly>

                </div>
		</div>

    
		
		<div class="col-md-9">
            <div class="form-group">		 
             <a href="<?php echo base_url().'admin/show_user_designation'?>"><button class="btn btn-primary" style= "padding-left:40%; padding-right: 40%;">Cancel</button></a>
			</div>
		</div>
	</div>
</div>  
</div>                                                               
 

 
