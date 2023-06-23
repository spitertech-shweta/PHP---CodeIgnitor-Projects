<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row" style="padding-top: 7%; padding-left: 25%; padding-right: 25%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>AGENT DETAILS</h3></div>
                                    <div class="card-body" class="table-actions">
									<a href="<?php echo base_url().'admin/agent/'?>"><button type="button" class="btn btn-primary">ADD AGENT &nbsp;&nbsp;</button></a>
									<a href="<?php echo base_url().'admin/trash_agent_0/'?>"><button type="button" class="btn btn-primary pull-left">TRASH</button></a>

                                        <table id="data_table" class="table table-condensed table-striped  table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">Agent Id</th>
                                                    <th style="width:130px">Agent Name</th>
                                                    <th style="width:130px">Agent email</th>
                                                    <th style="width:130px">Agent Mobile</th>
													
                                                    <th style="width:130px">Agent Image</th>
                                                  
                                                   

													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action;</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($agent as $agent_listing){?>

                                             <tr>
											       <td><?php echo $agent_listing->agent_id; ?></td>
													<td><?php echo $agent_listing->agent_name; ?></td>
                                                    <td><?php echo $agent_listing->agent_email; ?></td>
                                                    <td><?php echo $agent_listing->agent_mobile; ?></td>
												
													<td><img src="<?php echo base_url().$agent_listing->agent_img; ?>" class="table-user-thumb" alt=""></td>
                                                   
													

                                                	<?php
                                                            $status ="";
                                                            if($agent_listing->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($agent_listing->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>



													<td><div class="table-actions">
															<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/view_agent/'.$agent_listing->agent_id;?>">VIEW</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/edit_agent/'.$agent_listing->agent_id;?>">EDIT</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/onDelete_update_agent/'.$agent_listing->agent_id;?>">DELETE</a></button>
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
