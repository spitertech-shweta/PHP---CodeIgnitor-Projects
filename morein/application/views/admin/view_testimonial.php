

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%;padding-left:30%; padding-right: 20%;">     
      					
		<div class="col-md-9">
			<div class="form-group">
            <a href="<?php echo base_url().'admin/show_testimonial/'?>"> <button type="button" class="btn btn-primary">SHOW CLIENT TESTIMONIALS</button></a>
                <br><br>
                <input type="hidden" class="form-control" id="client_id" name="client_id"  value="<?php echo $view_testimonial->client_id; ?>">
                <label for ="Client name">Client Name</label>
                <input type="text" class="form-control" id="client_name" name="client_name"  value="<?php echo $view_testimonial->client_name; ?>" readonly>
            </div>
		</div>

       
        <div class="col-md-9">
        <label>Client Image</label>
            <div class="form-group">
                <img src = "<?php echo base_url().$view_testimonial->client_img; ?>"  width="300" height="300" readonly>
            </div>
		</div>		
	
       

        <div class="col-md-9" class="disabled">
            <div class="form-group">
			    <label>Client Quote</label>
				<textarea name="client_quote" id = "client_quote" readonly><?php echo htmlspecialchars($view_testimonial->client_quote);?></textarea>
		 	</div>
		</div>	
     
		<div class="col-md-9">
            <div class="form-group">		 
             <a href="<?php echo base_url().'admin/show_testimonial'?>"><button class="btn btn-primary">Cancel</button></a>
			</div>
		</div>
	</div>
</div>  
</div>                                                               
 


<script>
    CKEDITOR.replace('client_quote');
</script>  
         

 
