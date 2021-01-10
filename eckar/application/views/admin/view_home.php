

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;">     
      					
		<div class="col-md-9">
				<div class="form-group">
                <input type="hidden" class="form-control" id="home_id" name="home_id"  value="<?php echo $view_home->home_id; ?>">
				</div>
		</div>

		<div class="col-md-9">
            <div class="form-group">
            <img src = "<?php echo base_url().$view_home->home_app_img; ?>"  width="300" height="300" readonly>

             </div>
		</div>		

		<div class="col-md-9" class="disabled">
            <div class="form-group">
			    <label>Website Description</label>
				<textarea name="home_desc" id = "home_desc" readonly><?php echo htmlspecialchars($view_home->home_desc);?></textarea>
		 	</div>
		</div>	
        

			  
		<div class="col-md-9">
            <div class="form-group">		 
            	<a href="<?php echo base_url().'admin/show_home'?>"><button class="btn btn-primary">Cancel</button></a>

			</div>
		</div>

	</div>
</div>  
</div>                                                               
 
<script>
    CKEDITOR.replace('home_desc');
</script>  
             

 

