<form method = "POST" action="<?php echo base_url()?>admin/add_pricing/"  enctype='multipart/form-data'>
<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;">     
    
        <div class="col-md-9">
            <div class="form-group">
                <h3 style ="width:600px"><input type="text" class="form-control" id="pricing_title" name="pricing_title" placeholder="Pricing title"></h3>
            </div>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <h3 style ="width:600px"><input type="text" class="form-control" id="price" name="price" placeholder="Price"></h3>
            </div>
        </div>

		<div class="col-md-9">
            <div class="form-group">
			    <label>Price Description</label>
				<textarea name="pricing_desc"></textarea>
		 	</div>
		</div>	

        
		<div class="col-md-9">
            <div class="form-group">		 
   				<button type="submit" class="btn btn-primary mr-2">Submit</button>
            	<button class="btn btn-light"><a href="<?php echo base_url().'admin/show_pricing'?>">Cancel</a></button>

			</div>
		</div>

	</div>
</div>  
</div>                                                               
</form>  


 <script>
    CKEDITOR.replace('pricing_desc');
</script>        


 
 
