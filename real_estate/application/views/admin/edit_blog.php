

<form method = "POST" action="<?php echo base_url()?>admin/update_blog"  enctype='multipart/form-data'>
<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left:30%;">     
      
							
		<div class="col-md-9">
				<div class="form-group">
                <input type="hidden" class="form-control" id="blog_id" name="blog_id"  value="<?php echo $edit_blog->blog_id; ?>">
                <input type="text" class="form-control" id="blog_name" name="blog_name" placeholder="Blog Name" value="<?php echo $edit_blog->blog_name; ?>">
				</div>
		</div>

    <div class="col-md-9" >
			<div class="form-group">
				<textarea id="blog_content" name="blog_content" class= "summernote"><?php echo htmlspecialchars($edit_blog->blog_content);?></textarea>
			</div>		
		</div>

				<br><br>

		<div class="col-md-9">
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="blog_img" id="blog_img" class="file-upload-default" value="<?php echo $edit_blog->blog_img; ?>">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" value ="<?php echo $edit_blog->blog_img; ?>">
                <input type ="hidden" name ="old_img" id ="old_img" value="<?php echo  $edit_blog->blog_img;?>">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button" name="upload" value="Upload">Upload</button>
			    </span>
             </div>
		</div>		
        
		<div class="col-md-9">
            <div class="form-group">		 
   				<button type="submit" class="btn btn-primary mr-2">Submit</button>
            	<button class="btn btn-light"><a href="<?php echo base_url().'admin/show_blog'?>">Cancel</a></button>

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
             
