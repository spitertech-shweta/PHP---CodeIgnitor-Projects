<div class="row">
                    <div class ="col-md-3"></div>			
					
					
						<div class="row" style="padding-top: 7%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>STUDENT INFORMATION</h3></div>
                                    <div class="card-body">
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Gender</th>
													<th>Images</th>
													<th>Action</th>
													<th>Action&nbsp;</th>
													<th>Action</th>
			
                                                </tr>
                                            </thead>
                                            <tbody>

                                             <tr>
                                                    <td><?php echo $h->id; ?></td>
                                                    <td><?php echo $h->name; ?></td>
                                                    <td><?php echo $h->email; ?></td>
                                                    <td><?php echo $h->gender; ?></td>
													<td><img src="<?php echo base_url().$h->img; ?>" class="table-user-thumb" alt=""></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/edit_stud_data/'.$h->id;?>">EDIT</a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_stud_data/'.$h->id;?>">DELETE</a>
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
