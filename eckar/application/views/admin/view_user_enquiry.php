

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;">     
      					
		<div class="col-md-9">
			<div class="form-group">
                <input type="hidden" class="form-control" id="enquiry_id" name="enquiry_id"  value="<?php echo $view_user_enquiry->enquiry_id; ?>">
                <input type="text" class="form-control" id="enquiry_id" name="enquiry_id"  value="<?php echo $view_user_enquiry->enquiry_id; ?>" readonly>
             </div>
		</div>

        <div class="col-md-9">
			<div class="form-group">
                <input type="text" class="form-control" id="enquiry_name" name="enquiry_name"  value="<?php echo $view_user_enquiry->enquiry_name; ?>" readonly>
             </div>
		</div>
       
        <div class="col-md-9">
			<div class="form-group">
                <input type="text" class="form-control" id="enquiry_email" name="enquiry_email"  value="<?php echo $view_user_enquiry->enquiry_email; ?>" readonly>
             </div>
		</div>

        <div class="col-md-9">
			<div class="form-group">
                <input type="text" class="form-control" id="enquiry_message" name="enquiry_message"  value="<?php echo $view_user_enquiry->enquiry_message; ?>" readonly>
             </div>
		</div>
        

		
        
		<div class="col-md-9">
            <div class="form-group">		 
             <a href="<?php echo base_url().'admin/show_user_enquiry'?>"><button class="btn btn-primary">Cancel</button></a>
			</div>
		</div>
	</div>
</div>  
</div>                                                               
 


<script>
    CKEDITOR.replace('enquiry_icon_desc');
</script>  
         

 
