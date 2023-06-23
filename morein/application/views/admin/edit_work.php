

<form method = "POST" action="<?php echo base_url()?>admin/update_work"  enctype='multipart/form-data'>
<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;">     
      
  <?php 
      if($edit_work->work_category_id == 1)
      {
        $work_category_name = "Images";
      } 
      if($edit_work->work_category_id == 4)
      {
        $work_category_name = "Video";
      }
      
  ?>

    <div class="col-md-9">
		<div class="form-group">
    <a href="<?php echo base_url().'admin/show_work/'?>"> <button type="button" class="btn btn-primary">SHOW WORK</button></a>
        <br><br>
          <label>Work Category Name</label>
            <input type="text" class="form-control" id="work_category_name" name="work_category_name"  value="<?php echo $work_category_name; ?>" readonly>
        </div>
	</div>	

  <div class="col-md-9">
		<div class="form-group">
            <input type="hidden" class="form-control" id="work_id" name="work_id"  value="<?php echo $edit_work->work_id; ?>">
            <label>Work Title</label>
            <input type="text" class="form-control" id="work_title" name="work_title"  value="<?php echo $edit_work->work_title; ?>">
        </div>
	</div>	




    <div class="col-md-9">
            <div class="form-group">
			    <label>Work Description</label>
				<textarea name="work_desc"><?php echo htmlspecialchars($edit_work->work_desc);?></textarea>
		 	</div>
	</div>	

    <div class="col-md-9">
            <div class="form-group">
                <label></label>
                <table>
                <tr>   
                       <?php if($edit_work->work_img == '') {}  else{ ?>
                       <td><label>Work Image</label> <span class="btn btn-success fileinput-button" style="display:block; background-color:teal; width:250px;height:60px;">
                       <input type="file" name="work_img" id="work_img"/></td><td>&nbsp;&nbsp;&nbsp;</td>
                        <td><img src = "<?php echo base_url().$edit_work->work_img;?>" width = "100" height = "100"/></td>
                        <td><input type ="hidden" name ="old_work_img" id ="old_work_img" value="<?php echo $edit_work->work_img; ?>"> </td>  
                        <?php } ?>
                 </tr>
                 </table>    
             </div>
		    </div>	

        <div class="col-md-9">
            <div class="form-group">
                <label></label>
                <table>
                <tr>
                       <?php if($edit_work->work_video == '') {}  else{ ?>
                       <td><label>Work Video</label> <span class="btn btn-success fileinput-button" style="display:block; background-color:teal; width:250px;height:60px;">
                       <input type="file" name="work_video" id="work_video"  accept="video/mp4,video/x-m4v,video/*"></td><td>&nbsp;&nbsp;&nbsp;</td>
                        <td></td>
                        <video class="video-fluid z-depth-1" autoplay loop controls muted>
                            <source src="<?php echo base_url().$edit_work->work_video; ?>" type="video/mp4" />
                        </video>    
                        <?php } ?>

                 </tr>
                 </table>    
             </div>
		    </div>

  	
	<div class="col-md-9">
        <div class="form-group">		 
   			<button type="submit" class="btn btn-primary mr-2">Submit</button>
        <a href="<?php echo base_url().'admin/work'?>"> <button class="btn btn-primary">Cancel</button></a>

		</div>
	</div>

</div>
</div>  
</div>                                                               
</form>  


<script>
    CKEDITOR.replace('work_desc');
</script>  
             

