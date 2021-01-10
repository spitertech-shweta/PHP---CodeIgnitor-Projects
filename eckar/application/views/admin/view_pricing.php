

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;"">     
      					
		<div class="col-md-9">
				<div class="form-group">
                <input type="hidden" class="form-control" id="pricing_id" name="pricing_id"  value="<?php echo $view_pricing->pricing_id; ?>">
                <input type="text" class="form-control" id="pricing_title" name="pricing_title"  value="<?php echo $view_pricing->pricing_title; ?>" readonly>

            </div>
        </div>
        
        <div class="col-md-9">
				<div class="form-group">
                <input type="text" class="form-control" id="price" name="price"  value="<?php echo $view_pricing->price; ?>" readonly>
            </div>
		</div>

				

		<div class="col-md-9" class="disabled">
            <div class="form-group">
			    <label>Price Description</label>
				<textarea name="pricing_desc" id = "pricing_desc" readonly><?php echo htmlspecialchars($view_pricing->pricing_desc);?></textarea>
		 	</div>
		</div>	
        

			  
		<div class="col-md-9">
            <div class="form-group">		 
            	<a href="<?php echo base_url().'admin/show_pricing'?>"><button class="btn btn-primary">Cancel</button></a>

			</div>
		</div>

	</div>
</div>  
</div>                                                               
 
<script>
    CKEDITOR.replace('pricing_desc');
</script>  
             

 

