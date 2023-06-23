

<form method = "POST" action="<?php echo base_url()?>admin/update_agent"  enctype='multipart/form-data'>
<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left: 30%;">     
      
							
		<div class="col-md-9">
				<div class="form-group">
                <input type="hidden" class="form-control" id="agent_id" name="agent_id"  value="<?php echo $edit_agent->agent_id; ?>">
                <input type="text" class="form-control" id="agent_name" name="agent_name" placeholder="Agent Name" value="<?php echo $edit_agent->agent_name; ?>">
				</div>
		</div>
<!-- 
		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="agent_url" name="agent_url" placeholder="Page url" value="<?php //echo $edit_agent->agent_url; ?>">
				</div>
		</div> -->

        <div class="col-md-9" >
			<div class="form-group">
				<textarea id = "agent_desc" name="agent_desc" class= "summernote"><?php echo htmlspecialchars($edit_agent->agent_desc);?></textarea>
			</div>		
		</div>

				<br><br>

		<div class="col-md-9">
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="agent_img" id="agent_img" class="file-upload-default" value="<?php echo $edit_agent->agent_img; ?>">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" value ="<?php echo $edit_agent->agent_img; ?>">
                <input type ="hidden" name ="old_img" id ="old_img" value="<?php echo  $edit_agent->agent_img;?>">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button" name="upload" value="Upload">Upload</button>
			    </span>
             </div>
		</div>		

        <div class="col-md-9">
				<div class="form-group">
					<input type="email" class="form-control" id="agent_email" name="agent_email" placeholder="Agent Email" value="<?php echo $edit_agent->agent_email; ?>">
				</div>
		</div>

        <div class="col-md-9">
				<div class="form-group">
					<input type="tel" class="form-control" id="agent_mobile" name="agent_mobile" placeholder="Agnent mobile" value="<?php echo $edit_agent->agent_mobile; ?>">
				</div>
		</div>

        
		<div class="col-md-9">
            <div class="form-group">		 
   				<button type="submit" class="btn btn-primary mr-2">Submit</button>
            	<button class="btn btn-light"><a href="<?php echo base_url().'admin/show_agent'?>">Cancel</a></button>

			</div>
		</div>

	</div>
</div>  
</div>                                                               
</form>  


<script>
            
            $('.summernote').summernote({
              toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
                
              ]
            });
             </script>
             
