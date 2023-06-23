<form action="<?php echo base_url().'admin/add_seo'?>" method = "post">
<div class ="row">
    <div class ="col-md-3"></div>
        <div class="row" style="padding-top: 7%; padding-left: 30%; padding-right: 10%;">     						
            <div class="col-md-9">
                <div class="form-group">
                    <label for = "controller Name">controller Name</label>
                    <select id= "controller_name" name= "controller_name" style = "width:150px;">
                        <option value = "home">Home</option>
                    </select>
                    <label for = "Method Name">Method Name</label>
                    <select id= "nav_header" name= "nav_header" style = "width:150px;">
                        <option value = "index">Home</option>
                        <option value = "about">About</option>
                        <option value = "agents">Agents</option>
                        <option value = "blog">Blog</option>
                        <option value = "services">Services</option>
                        <option value = "contact">Contact</option>
                        <option value = "property_details">Property Details</option>
                    </select>
                </div>
            </div>

            <div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="meta_keyword" name="meta_keyword" placeholder="Meta Keyword">
				</div>
		</div>

            <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description">      
                </div>
            </div>



            <div class="col-md-9">
            <div class="form-group">		 
   				<button type="submit" class="btn btn-primary mr-2">Submit</button>
            	<button class="btn btn-light"><a href="<?php echo base_url().'admin/index'?>">Cancel</a></button>

			</div>
		</div>
        </div>
    </div>	 
</div> 
</form>