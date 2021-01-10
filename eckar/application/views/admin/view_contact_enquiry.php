

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;">     
      					
		<div class="col-md-9">
			<div class="form-group">
                <input type="hidden" class="form-control" id="contact_id" name="contact_id"  value="<?php echo $view_contact_enquiry->contact_id; ?>">
             </div>
		</div>

        <div class="col-md-9">
			<div class="form-group">
                <input type="text" class="form-control" id="contact_name" name="contact_name"  value="<?php echo $view_contact_enquiry->contact_name; ?>" readonly>
             </div>
		</div>
       
        <div class="col-md-9">
			<div class="form-group">
                <input type="text" class="form-control" id="contact_email" name="contact_email"  value="<?php echo $view_contact_enquiry->contact_email; ?>" readonly>
             </div>
		</div>

        <div class="col-md-9">
			<div class="form-group">
                <input type="text" class="form-control" id="contact_message" name="contact_message"  value="<?php echo $view_contact_enquiry->contact_message; ?>" readonly>
             </div>
		</div>
        

		
        
		<div class="col-md-9">
            <div class="form-group">		 
             <a href="<?php echo base_url().'admin/show_contact_enquiry'?>"><button class="btn btn-primary">Cancel</button></a>
			</div>
		</div>
	</div>
</div>  
</div>                                                               
 


<script>
    CKEDITOR.replace('enquiry_icon_desc');
</script>  
         

 
