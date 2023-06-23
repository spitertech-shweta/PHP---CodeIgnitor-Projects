

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;">     
      					
		<div class="col-md-9">
				<div class="form-group">
				<a href="<?php echo base_url().'admin/show_service/'?>"> <button type="button" class="btn btn-primary">SHOW SERVICES</button></a>
				<br><br>
                <input type="hidden" class="form-control" id="service_id" name="service_id"  value="<?php echo $view_service->service_id; ?>">
                <label>Service Title</label>
			    <input type="text" class="form-control" id="service_title" name="service_title"  value="<?php echo $view_service->service_title; ?>" readonly>

                </div>
		</div>

    
        <div class="col-md-9" class="disabled">
            <div class="form-group">
			    <label>Service Description</label>
				<textarea name="service_desc" id = "service_desc" readonly><?php echo htmlspecialchars($view_service->service_desc);?></textarea>
		 	</div>
		</div>	

		<div class="col-md-9">
		<label>Service Image</label>
            <div class="form-group">
                <img src = "<?php echo base_url().$view_service->service_img; ?>"  width="300" height="300" readonly>
            </div>
		</div>	

		
        
		<div class="col-md-9">
            <div class="form-group">		 
             <a href="<?php echo base_url().'admin/show_service'?>"><button class="btn btn-primary">Cancel</button></a>
			</div>
		</div>
	</div>
</div>  
</div>                                                               
 


<script>
    CKEDITOR.replace('service_desc');
</script>  
         

 
