<div class="row">
                    <div class ="col-md-3"></div>			
					<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;"> 
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>TRASH PAGES</h3></div>
                                    <div class="card-body">
                                   <a href="<?php echo base_url().'admin/show_user/'?>"> <button type="button" class="btn btn-primary">USER</button></a>
                                       <br><br> 
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">User Id</th>
                                                    <th style="width:130px">Image</th>
                                                    <th style="width:130px">First Name</th>
                                                    <th style="width:130px">Last Name</th>
                                                    <th style="width:130px">Mobile</th>
                                                    <th style="width:130px">Email</th>
                                                    <th style="width:130px">Address</th>
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action;</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($user_trash as $user_trash_details){?>

                                                <tr>
                                                   <td><?php echo $user_trash_details->user_id; ?></td>
													<td><img src="<?php echo base_url().$user_trash_details->user_img; ?>" class="table-user-thumb" alt=""></td>
                                                    <td><?php echo $user_trash_details->user_fname ?></td>
                                                    <td><?php echo $user_trash_details->user_lname ?></td>
                                                    <td><?php echo $user_trash_details->user_mobile ?></td>
                                                    <td><?php echo $user_trash_details->user_email ?></td>
                                                    <td><?php echo $user_trash_details->user_address ?></td>
                                                    
                                                	<?php
                                                            $status ="";
                                                            if($user_trash_details->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($user_trash_details->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/view_user/'.$user_trash_details->user_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/recover_user/'.$user_trash_details->user_id;?>"><button type="button" class="btn btn-primary">RECOVER</button></a>
													</div></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_user/'.$user_trash_details->user_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a>
													</div></td>
													<td></td>
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
