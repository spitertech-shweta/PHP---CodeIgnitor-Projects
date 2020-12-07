				<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row" style="padding-top: 7%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>ADMIN USER INFORMATION</h3></div>
                                    <div class="card-body">
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
                                            <tbody>

                                             <tr>
                                                    <td><?php echo $h->admin_id; ?></td>
                                                    <td><?php echo $h->name; ?></td>
                                                    <td><?php echo $h->email; ?></td>
                                                    <td><?php echo $h->pwd; ?></td>
													<td><?php echo $h->mobile; ?></td>
													<td><?php echo $h->admin_role; ?></td>

													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/edit_admin_data/'.$h->admin_id;?>">EDIT</a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_admin_data/'.$h->admin_id;?>">DELETE</a>
													</div></td>
													<td></td>
                                         	</tr>
											
						
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
				</div>
