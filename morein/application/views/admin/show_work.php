
<div class="row">
    <div class ="col-md-3"></div>			
			<div class="row"> 
          <div class="col-md-12">
          <div class="card" style = "padding-right:100px; padding-left:350px; padding-top:80px;padding-bottom:80px;"> 
          <div class="card-header"><h3>WORK DETAILS</h3></div>  
            <div class="container-fluid"><a href="<?php echo base_url().'admin/trash_work_0/'?>"> <button type="button" style="margin:5px;" class="btn btn-primary float-right">TRASH</button></a>
            <a href="<?php echo base_url().'admin/work/'?>"><button type="button" style="margin:5px;" class="btn btn-primary float-right">ADD</button></a></div>
         
            <div class="card-body" class="table-actions">                                       
                <table  id="data_table"  class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width:140px">TITLE</th>
                    <th style="width:160px">NAME</th>
                    <th style="width:170px">IMAGE</th> 
                    <th>&nbsp;</th>
                    <th>Action</th>
                    <th>&nbsp;</th>
                    <th></th>
                  
                    
                  </tr>
                </thead>
                <tbody><?php foreach($show_work as $work) { ?>
                  <tr>
                    <td><?php echo $work->work_title;?></td>
                    <?php 
                    if($work->work_category_id == 1)
                    {
                      $work_category_name = "Images";
                    }
              
                   
                    if($work->work_category_id == 4)
                    {
                      $work_category_name = "Video";
                    }
                   
                   
                    
                    ?>
                    <td><?php echo $work_category_name;?></td>
                    <td>
                    <?php  if($work->work_img == '') {} else {  ?>
                     <img src="<?php echo base_url().$work->work_img; ?>" class="table-user-thumb" alt=""> <?php } ?>
                    </td>
                   


                    <td><div class="table-actions">
                        <a href="<?php echo base_url().'admin/view_work/'.$work->work_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
                        </div>
                    </td>
                  
                    <td><div class="table-actions"> 
                        <a href="<?php echo base_url().'admin/edit_work/'.$work->work_id;?>"><button type="button" class="btn btn-primary">EDIT</button></a>
                        </div>
                    </td>


                    <td><div class="table-actions"> 
                        <a href="<?php echo base_url().'admin/onDelete_update_work/'.$work->work_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a></td>
                        </div>
                    </td>
                    <td></td>
                   
                  
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>  
          </div>
        </div>             
      </div>
    </div>
  </div>
</div>



