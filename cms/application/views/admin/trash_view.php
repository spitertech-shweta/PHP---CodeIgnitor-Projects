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
													<th>&nbsp;</th>
													<th>Action</th>
													<th>&nbsp;</th>
			
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($h as $row){?>

                                             <tr>
                                                    <td><?php echo $row->id; ?></td>
                                                    <td><?php echo $row->name; ?></td>
                                                    <td><?php echo $row->email; ?></td>
                                                    <td><?php echo $row->gender; ?></td>
													<td><img src="<?php echo base_url().$row->img; ?>" class="table-user-thumb" alt=""></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/view/'.$row->id;?>">VIEW</a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/recover/'.$row->id;?>">RECOVER</a>
													</div></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_stud_data/'.$row->id;?>">DELETE</a>
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
