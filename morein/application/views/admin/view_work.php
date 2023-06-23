

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%;padding-left:30%; padding-right: 20%;">     
      					
		<div class="col-md-9">
				<div class="form-group">
        <a href="<?php echo base_url().'admin/show_work/'?>"> <button type="button" class="btn btn-primary">SHOW WORK</button></a>
        <br><br>
                <input type="hidden" class="form-control" id="work_id" name="work_id"  value="<?php echo $view_work->work_id; ?>">
              	<?php 
                  if($view_work->work_category_id == 1)
                  {
                    $work_category_name = "Images";
                  } 
                  if($view_work->work_category_id == 4)
                  {
                    $work_category_name = "Video";
                  }
                  
              ?>
                
                <label>work category</label>
                    <input type="text" class="form-control" id="work_category_id" name="work_category_id"  value="<?php echo $work_category_name; ?>" readonly>
                    </div>
                </div>
              
  
	
	
		     <div class="col-md-9">
	        	<label>work title</label>
                <input type="text" class="form-control" id="work_title" name="work_title"  value="<?php echo $view_work->work_title; ?>" readonly>
        </div>
		
	   <br><br>
        <div class="col-md-9" class="disabled">
            <div class="form-group">
			    <label>work Description</label>
				<textarea name="work_desc" id = "work_desc" readonly><?php echo htmlspecialchars($view_work->work_desc);?></textarea>
		 	</div>
		</div>	

    <?php if($view_work->work_img== '') { }  else { ?>
    <div class="col-md-9">
            <div class="form-group">
             <img src = "<?php echo base_url().$view_work->work_img; ?>" width="340" height="200" readonly>
		       </div>
	 </div>	
   <?php } ?>	

  <?php if($view_work->work_video == '') { }  else { ?>
   <div class="col-md-9">
      <video class="video-fluid z-depth-1" autoplay loop controls muted>
        <source src="<?php echo base_url().$view_work->work_video; ?>" type="video/mp4" />
      </video>
  </div>
  <?php } ?>
	<br><br><br>

		<div class="col-md-9">
            <div class="form-group">		 
             <a href="<?php echo base_url().'admin/show_work'?>"><button class="btn btn-primary">Cancel</button></a>
			</div>
		</div>
	</div>
</div>  
</div>                                                               
 


<script>
    CKEDITOR.replace('work_desc');
</script>  
         

 
