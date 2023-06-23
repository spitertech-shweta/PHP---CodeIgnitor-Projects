
<div class="row">
    <div class ="col-md-3"></div>			
		  <div class="row"> 
          <div class="col-md-12">
          <div class="card" style = "padding-right:100px; padding-left:400px; padding-top:80px;padding-bottom:80px;"> 
          <div class="card-header"><h3>USER DESIGNATION DETAILS</h3></div>   
          <div class="container-fluid"><a href="<?php echo base_url().'admin/trash_user_designation_0/'?>"> <button type="button" style="margin:5px;" class="btn btn-primary float-right" >TRASH</button></a>
          <a href="<?php echo base_url().'admin/user_designation/'?>">  <button type="button" style="margin:5px;" class="btn btn-primary float-right">ADD</button></a></div>
        
          <div class="card-body" class="table-actions">
          <table  id="data_table" class="table table-bordered">
            <thead>
              <tr>
                <th style="width:190px">DESIGNATION</th>
                <th style="width:150px">STATUS</th>
                <th style="width:60px">&nbsp;</th>
                <th style="width:60px">Action</th>
                <th style="width:60px">&nbsp;</th>
                <th></th>
              </tr>
            </thead>
            <tbody><?php foreach($show_user_designation as $user_designation_details) { ?>
              <tr>
                <td><?php echo $user_designation_details->user_designation;?></td>
                <?php
                     $status ="";
                     if($user_designation_details->status=="1")
                     {
                         $status ="ACTIVE";
                     }
                     else if($user_designation_details->status=="0")
                     {
                         $status ="INACTIVE";
                     }
                 ?>
				
				<td><?php echo $status; ?></td>
               
                <td><div class="table-actions">
                     <a href="<?php echo base_url().'admin/view_user_designation/'.$user_designation_details->user_designation_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
                    </div>
                </td>
               
                <td><div class="table-actions"> 
                    <a href="<?php echo base_url().'admin/edit_user_designation/'.$user_designation_details->user_designation_id;?>"><button type="button" class="btn btn-primary">EDIT</button></a>
                    </div>
                </td>


                <td><div class="table-actions"> 
                    <a href="<?php echo base_url().'admin/onDelete_update_user_designation/'.$user_designation_details->user_designation_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a></td>
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



