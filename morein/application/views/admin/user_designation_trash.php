<div class="row">
                    <div class ="col-md-3"></div>			
					<div class="row"> 
                            <div class="col-md-12">
                                <div class="card" style = "padding-right:100px; padding-left:400px; padding-top:80px;padding-bottom:80px;">
                                    <div class="card-header"><h3>USER DESIGNATION TRASH</h3></div>
                                    <div class="container-fluid"><a href="<?php echo base_url().'admin/show_user_designation/'?>"> <button type="button" class="btn btn-primary float-right">SHOW USER DESIGNATION</button></a></div>
                                    <div class="card-body">
                                        <table id="data_table" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    
                                                    <th style="width:180px">DESIGNATION</th>
                                                    <th style="width:180px">STATUS</th>
                                                    <th>&nbsp;</th>
                                                    <th>Action</th>
                                                    <th>&nbsp;</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($user_designation_trash as $user_designation_trash_details){?>

                                            <tr>
                                            
                                                    <td><?php echo $user_designation_trash_details->user_designation ?></td>
                                                        <?php
                                                            $status ="";
                                                            if($user_designation_trash_details->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($user_designation_trash_details->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
                                                        
                                                        <td><?php echo $status; ?></td>

                                                        <td><div class="table-actions">
                                                            <a href="<?php echo base_url().'admin/view_user_designation/'.$user_designation_trash_details->user_designation_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
                                                            </div>
                                                        </td>
                                                        <td><div class="table-actions">
                                                            <a href="<?php echo base_url().'admin/recover_user_designation/'.$user_designation_trash_details->user_designation_id;?>"><button type="button" class="btn btn-primary">RECOVER</button></a>
                                                        </div></td>
                                                        <td><div class="table-actions">
                                                            <a href="<?php echo base_url().'admin/delete_user_designation/'.$user_designation_trash_details->user_designation_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a>
                                                        </div></td>
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
