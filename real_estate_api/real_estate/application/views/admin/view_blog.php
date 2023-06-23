

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left: 30%;">     
      					
		<div class="col-md-9">
				<div class="form-group">
                <input type="hidden" class="form-control" id="blog_id" name="blog_id"  value="<?php echo $view_blog->blog_id; ?>">
                <input type="text" class="form-control" id="blog_name" name="blog_name" placeholder="Page Name" value="<?php echo $view_blog->blog_name; ?>" readonly>
				</div>
		</div>

        <div class="col-md-9" >
			<div class="form-group">
				<textarea id = "blog_content" name="blog_content" class= "summernote"><?php echo htmlspecialchars($view_blog->blog_content);?></textarea>
			</div>		
		</div>

				<br><br>

		<div class="col-md-9">
            <div class="form-group">
            <img src = "<?php echo base_url().$view_blog->blog_img; ?>"  width="300" height="300" readonly>

             </div>
		</div>		

        
		<div class="col-md-9">
            <div class="form-group">		 
            	<a href="<?php echo base_url().'admin/show_blog'?>"><button class="btn btn-primary">Cancel</button></a>

			</div>
		</div>

	</div>
</div>  
</div>                                                               
 
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
             

             <script>
  $('#blog_content').summernote('disable');

 </script>


 
