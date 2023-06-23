<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row" style="padding-top: 7%; padding-left:25%; padding-right: 25%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>USER DETAILS</h3></div>
                                    <div class="card-body" class="table-actions">
									<!-- <a href="<?php// echo base_url().'admin/user'?>"><button type="button" class="btn btn-primary">ADD&nbsp;&nbsp;</button></a> -->
									<a href="<?php echo base_url().'admin/trash_user_0/'?>"><button type="button" class="btn btn-primary pull-left">TRASH</button></a>
                                    <br><br>
                                        <table id="data_table" class="table table-condensed table-striped  table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">User Id</th>
                                                    <th style="width:130px">User Image</th>
                                                    <th style="width:130px">User First Name</th>
                                                    <th style="width:130px">User Last Name</th>
                                                    <th style="width:130px">User Mobile</th>
                                                    <th style="width:130px">User Email</th>
                                                    <th style="width:130px">User Address</th>
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($show_user as $show_user_details){?>

                                             <tr>
											       <td><?php echo $show_user_details->user_id; ?></td>
													<td><img src="<?php echo base_url().$show_user_details->user_img; ?>" class="table-user-thumb" alt=""></td>
                                                    <td><?php echo $show_user_details->user_fname ?></td>
                                                    <td><?php echo $show_user_details->user_lname ?></td>
                                                    <td><?php echo $show_user_details->user_mobile ?></td>
                                                    <td><?php echo $show_user_details->user_email ?></td>
                                                    <td><?php echo $show_user_details->user_address ?></td>
                                                    
                                    

													<td><div class="table-actions">
															<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/view_user/'.$show_user_details->user_id;?>">VIEW</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/edit_user/'.$show_user_details->user_id;?>">EDIT</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/onDelete_update_user/'.$show_user_details->user_id;?>">DELETE</a></button>
														</div>
													</td>
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
