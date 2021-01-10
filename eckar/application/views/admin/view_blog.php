

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%;padding-left:30%; padding-right: 20%;">     
      					
		<div class="col-md-9">
				<div class="form-group">
                <input type="hidden" class="form-control" id="blog_id" name="blog_id"  value="<?php echo $view_blog->blog_id; ?>">
                <input type="text" class="form-control" id="blog_title" name="blog_title"  value="<?php echo $view_blog->blog_title; ?>" readonly>

                </div>
		</div>

       
        <div class="col-md-9">
            <div class="form-group">
                <img src = "<?php echo base_url().$view_blog->blog_img; ?>"  width="300" height="300" readonly>
            </div>
		</div>		
	
       

        <div class="col-md-9" class="disabled">
            <div class="form-group">
			    <label>Blog Description</label>
				<textarea name="blog_desc" id = "blog_desc" readonly><?php echo htmlspecialchars($view_blog->blog_desc);?></textarea>
		 	</div>
		</div>	

		
		<div class="col-md-9">
				<div class="form-group">
				<label>Blog Owner</label>
                <input type="text" class="form-control" id="blog_owner" name="blog_owner"  value="<?php echo $view_blog->blog_owner; ?>" readonly>
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
    CKEDITOR.replace('blog_desc');
</script>  
         

 
