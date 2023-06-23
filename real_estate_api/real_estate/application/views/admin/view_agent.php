
<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left: 30%;">     
      					
		<div class="col-md-9">
				<div class="form-group">
                <input type="hidden" class="form-control" id="agent_id" name="agent_id"  value="<?php echo $view_agent->agent_id; ?>">
                <input type="text" class="form-control" id="agent_name" name="agent_name" placeholder="Page Name" value="<?php echo $view_agent->agent_name; ?>" readonly>
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="agent_email" name="agent_email" placeholder="Agent Eamil" value="<?php echo $view_agent->agent_email; ?>" readonly>
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="agent_mobile" name="agent_mobile" placeholder="Agent Mobile" value="<?php echo $view_agent->agent_mobile; ?>" readonly>
				</div>
		</div>

        <div class="col-md-9" class="disabled">
			<div class="form-group">
				<textarea id = "agent_desc" name="agent_desc" class= "summernote"><?php echo htmlspecialchars($view_agent->agent_desc);?></textarea>
			</div>		
		</div>

				<br><br>

		<div class="col-md-9">
            <div class="form-group">
            <img src = "<?php echo base_url().$view_agent->agent_img; ?>"  width="300" height="300" readonly>

             </div>
		</div>		

        
		<div class="col-md-9">
            <div class="form-group">		 
            	<a href="<?php echo base_url().'admin/show_agent'?>"><button class="btn btn-primary">Cancel</button></a>

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
  $('#agent_desc').summernote('disable');

 </script>
