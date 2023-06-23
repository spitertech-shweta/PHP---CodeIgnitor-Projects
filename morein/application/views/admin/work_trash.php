<div class="row">
                    <div class ="col-md-3"></div>			
					<div class="row"> 
                            <div class="col-md-12">
                            <div class="card" style = "padding-right:100px; padding-left:350px; padding-top:80px;padding-bottom:80px;">
                            <div class="card-header"><h3>TRASH WORK</h3></div>
                            <div class="container-fluid"><a href="<?php echo base_url().'admin/show_work/'?>"> <button type="button" class="btn btn-primary float-right">SHOW WORK</button></a></div>
                            <div class="card-body">
                              
                                <table id="data_table"  class="table table-bordered">
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
                                    <tbody><?php foreach($work_trash as $work_trash_details){?>

                                <tr>
                                <td><?php echo $work_trash_details->work_title;?></td>
                                <?php 
                                if($work_trash_details->work_category_id == 1)
                                {
                                $work_category_name = "Images";
                                }
                                if($work_trash_details->work_category_id == "")
                                {
                                $work_category_name = "";
                                }
                               
                                if($work_trash_details->work_category_id == 4)
                                {
                                $work_category_name = "Video";
                                }
                               
                               
                                
                                ?>
                            <td><?php echo $work_category_name;?></td>
                            <td><img src="<?php echo base_url().$work_trash_details->work_img; ?>" class="table-user-thumb" alt=""></td> 

                           
                            <td><div class="table-actions">
                                <a href="<?php echo base_url().'admin/recover_work/'.$work_trash_details->work_id;?>"><button type="button" class="btn btn-primary">RECOVER</button></a>
                                </div>
                            </td>
                        
                            <td><div class="table-actions"> 
                                 <a href="<?php echo base_url().'admin/view_work/'.$work_trash_details->work_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
                                </div>
                            </td>


                            <td><div class="table-actions"> 
                                <a href="<?php echo base_url().'admin/delete_work/'.$work_trash_details->work_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a>
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
