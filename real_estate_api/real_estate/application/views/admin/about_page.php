<form method = "POST" action="<?php echo base_url()?>admin/add_page/"  enctype='multipart/form-data'>
<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left: 30%;">     
      
							
		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="page_name" name="page_name" placeholder="Page Name">
				</div>
		</div>

		
        <div class="col-md-9" >
			<div class="form-group">
				<textarea id="page_description" name="page_description" class= "summernote"></textarea>
			</div>		
		</div>

				<br><br>

		<div class="col-md-9">
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="page_img" id="page_img" class="file-upload-default">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button" name="upload" value="Upload">Upload</button>
			    </span>
             </div>
		</div>		


		<div class="col-md-9">
            <div class="form-group">		 
   				<button type="submit" class="btn btn-primary mr-2">Submit</button>
            	<button class="btn btn-light"><a href="<?php echo base_url().'admin/show_page'?>">Cancel</a></button>

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
 
 
