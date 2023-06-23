<form method = "POST" action="<?php echo base_url()?>admin/add_agent/"  enctype='multipart/form-data'>
<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left: 30%;">     
      
							
		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="agent_name" name="agent_name" placeholder="Agent Name">
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="agent_email" name="agent_email" placeholder="Agent Email">
				</div>
		</div>
       

        <div class="col-md-9">
				<div class="form-group">
					<input type="tel" class="form-control" id="agent_mobile" name="agent_mobile" placeholder="Agent Mobile">
				</div>
		</div>

        
        <div class="col-md-9" >
			<div class="form-group">
				<textarea id="agent_desc" name="agent_desc" class= "summernote"></textarea>
			</div>		
		</div>

				<br><br>

		<div class="col-md-9">
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="agent_img" id="agent_img" class="file-upload-default">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button" name="upload" value="Upload">Upload</button>
			    </span>
             </div>
		</div>		
		
        
		<div class="col-md-9">
            <div class="form-group">		 
   				<button type="submit" class="btn btn-primary mr-2">Submit</button>
            	<a href="<?php echo base_url().'admin/show_agent'?>"><button class="btn btn-light">Cancel</button></a>
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
 
