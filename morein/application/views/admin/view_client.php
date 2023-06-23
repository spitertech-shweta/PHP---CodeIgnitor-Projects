

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;">     
      					
		<div class="col-md-9">
				<div class="form-group">
				<a href="<?php echo base_url().'admin/show_client/'?>"> <button type="button" class="btn btn-primary">SHOW CLIENT</button></a>
				<br><br>
                <input type="hidden" class="form-control" id="client_id" name="client_id"  value="<?php echo $view_client->client_id; ?>">
                 <label for ="Client Title">Client Title</label>
                <input type="text" class="form-control" id="client_title" name="client_title"  value="<?php echo $view_client->client_title; ?>" readonly>
                </div>
		</div>

    
        
		<div class="col-md-9">
		<label for ="Client Image">Client Image</label>
            <div class="form-group">
                <img src = "<?php echo base_url().$view_client->client_img; ?>"  width="300" height="300" readonly>
            </div>
		</div>	

		
        
		<div class="col-md-9">
            <div class="form-group">		 
             <a href="<?php echo base_url().'admin/show_client'?>"><button class="btn btn-primary">Cancel</button></a>
			</div>
		</div>
	</div>
</div>  
</div>                                                               
 

 
