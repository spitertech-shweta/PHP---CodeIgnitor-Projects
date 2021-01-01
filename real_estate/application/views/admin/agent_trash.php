<div class="row">
                    <div class ="col-md-3"></div>			
				
						<div class="row" style="padding-top: 7%; padding-left: 20%;"> 
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>TRASH PAGES</h3></div>
                                    <div class="card-body">
                                   <a href="<?php echo base_url().'admin/show_agent/'?>"> <button type="button" class="btn btn-primary">AGENTS</button></a>
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                <th style="width:50px">Agent Id</th>
                                                <th style="width:130px">Agent Name</th>
                                                <th style="width:130px">Agent email</th>
                                                <th style="width:130px">Agent Mobile</th>
												<th style="width:130px">Agent Description</th>
                                                <th style="width:130px">Agent Image</th>
												<th>&nbsp;</th>
												<th>Action;</th>
												<th>&nbsp;</th>
												<th>&nbsp;</th>
			
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($agent_list as $trash_agent){?>

                                             <tr>
                                             <td><?php echo $trash_agent->agent_id; ?></td>
													<td><?php echo $trash_agent->agent_name; ?></td>
                                                    <td><?php echo $trash_agent->agent_email; ?></td>
                                                    <td><?php echo $trash_agent->agent_mobile; ?></td>
													<td><?php echo $trash_agent->agent_desc; ?></td>
													<td><img src="<?php echo base_url().$trash_agent->agent_img; ?>" class="table-user-thumb" alt=""></td>
                                                   
					
                                                	<?php
                                                            $status ="";
                                                            if($trash_agent->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($trash_agent->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/view_agent/'.$trash_agent->agent_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/recover_agent/'.$trash_agent->agent_id;?>"><button type="button" class="btn btn-primary">RECOVER</button></a>
													</div></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_agent/'.$trash_agent->agent_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a>
													</div></td>
													
                                         </tr>
											<?php } ?>
			
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
				</div>
 