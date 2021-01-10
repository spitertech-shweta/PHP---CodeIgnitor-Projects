

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;">     
      					
		<div class="col-md-9">
				<div class="form-group">
                <input type="hidden" class="form-control" id="about_id" name="about_id"  value="<?php echo $view_about->about_id; ?>">
                <input type="text" class="form-control" id="about_icon_title" name="about_icon_title"  value="<?php echo $view_about->about_icon_title; ?>" readonly>

                </div>
		</div>

       
        <div class="col-md-9">
            <div class="form-group">
                <img src = "<?php echo base_url().$view_about->about_icon_img; ?>"  width="300" height="300" readonly>
            </div>
		</div>		
	
       

        <div class="col-md-9" class="disabled">
            <div class="form-group">
			    <label>Icon Description</label>
				<textarea name="about_icon_desc" id = "about_icon_desc" readonly><?php echo htmlspecialchars($view_about->about_icon_desc);?></textarea>
		 	</div>
		</div>	

		
        
		<div class="col-md-9">
            <div class="form-group">		 
             <a href="<?php echo base_url().'admin/show_about'?>"><button class="btn btn-primary">Cancel</button></a>
			</div>
		</div>
	</div>
</div>  
</div>                                                               
 


<script>
    CKEDITOR.replace('about_icon_desc');
</script>  
         

 
