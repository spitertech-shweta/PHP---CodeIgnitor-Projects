

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left: 30%;">     
      					
		<div class="col-md-9">
				<div class="form-group">
                <input type="hidden" class="form-control" id="page_id" name="page_id"  value="<?php echo $view_page->page_id; ?>">
                <input type="text" class="form-control" id="page_name" name="page_name" placeholder="Page Name" value="<?php echo $view_page->page_name; ?>" readonly>
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="page_url" name="page_url" placeholder="Page url" value="<?php echo $view_page->page_url; ?>" readonly>
				</div>
		</div>

        <div class="col-md-9" class="disabled">
			<div class="form-group">
				<textarea id = "page_description" name="page_description" class= "summernote"><?php echo htmlspecialchars($view_page->page_description);?></textarea>
			</div>		
		</div>

				<br><br>

		<div class="col-md-9">
            <div class="form-group">
            <img src = "<?php echo base_url().$view_page->page_img; ?>"  width="300" height="300" readonly>

             </div>
		</div>		

        
		<div class="col-md-9">
            <div class="form-group">		 
            	<a href="<?php echo base_url().'admin/show_page'?>"><button class="btn btn-primary">Cancel</button></a>

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
  $('#page_description').summernote('disable');

 </script>

