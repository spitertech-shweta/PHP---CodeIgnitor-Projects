

<form method = "POST" action="<?php echo base_url()?>admin/update_page"  enctype='multipart/form-data'>
<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left: 30%;">     
      
							
		<div class="col-md-9">
				<div class="form-group">
                <input type="hidden" class="form-control" id="page_id" name="page_id"  value="<?php echo $page->page_id; ?>">
                <input type="text" class="form-control" id="page_name" name="page_name" placeholder="Page Name" value="<?php echo $page->page_name; ?>">
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="page_url" name="page_url" placeholder="Page url" value="<?php echo $page->page_url; ?>">
				</div>
		</div>

        <div class="col-md-9" >
			<div class="form-group">
				<textarea id = "page_description" name="page_description" class= "summernote"><?php echo htmlspecialchars($page->page_description);?></textarea>
			</div>		
		</div>

				<br><br>

		<div class="col-md-9">
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="page_img" id="page_img" class="file-upload-default" value="<?php echo $page->page_img; ?>">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" value ="<?php echo $page->page_img; ?>">
                <input type ="hidden" name ="old_img" id ="old_img" value="<?php echo  $page->page_img;?>">
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
             