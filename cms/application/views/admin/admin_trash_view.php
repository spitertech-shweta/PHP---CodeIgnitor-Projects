				<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row" style="padding-top: 7%; padding-right: 3%;"> 
                            <div class="col-md-12">
                               <!-- <div class="card">
                                    <div class="card-header"><h3>ADMIN USER DETAILS</h3></div>
                                    <div class="card-body">-->
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
													<th>Mobile</th>
													<th>Admin Role</th>
													<th>&nbsp;</th>
													<th>Action</th>
													<th>&nbsp;</th>
			
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($h as $row){?>

                                             <tr>
                                                    <td><?php echo $row->admin_id; ?></td>
                                                    <td><?php echo $row->name; ?></td>
                                                    <td><?php echo $row->email; ?></td>
                                                    <td><?php echo $row->pwd; ?></td>
													<td><?php echo $row->mobile; ?></td>
													<?php
													$admin_role="";
													if($row->admin_role == '1')
													{
														$admin_role = "Super Admin";
													}
													else if($row->admin_role == '2')
													{
														$admin_role = "Admin";
													}
													else if($row->admin_role == '3')
													{
														$admin_role = "Mananger";
													}
													?>
													<td><?php echo $admin_role; ?></td>

													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/view_admin/'.$row->admin_id;?>">VIEW</a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/recover_admin_data/'.$row->admin_id;?>">RECOVER</a>
													</div></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_admin_data/'.$row->admin_id;?>">DELETE</a>
													</div></td>
													
                                         </tr>
											<?php } ?>
			
                                            </tbody>
                                        </table>
                                   <!-- </div>
                                </div>
                            </div>-->
                        </div>
				</div>
