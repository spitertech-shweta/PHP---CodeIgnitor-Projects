				<div class="row">
                    <div class ="col-md-3"></div>			
					
					
						<div class="row" style="padding-top: 7%; padding-left: 30%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>STUDENT INFORMATION</h3></div>
                                    <div class="card-body">
									<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/add_stud/'?>">ADD</a></button>
									<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/trash_record_status_0/'?>">TRASH</a></button>

                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Gender</th>
													<th>Images</th>
													<th>Status</th>
													<th>Action</th>
													<th>&nbsp;</th>
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
													<?php
													$status ="";
													if($row->status=="1")
													{
														$status ="ACTIVE";
													}
													else if($row->status=="0")
													{
														$status ="INACTIVE";
													}
													?>
													
														
													<td><?php echo $status; ?></td>
													
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/edit_stud_data/'.$row->id;?>">EDIT</a></button>
														</div>
													</td>
													<td><div>
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/onDelete_update_data/'.$row->id;?>">DELETE</a></button>
														</div>
													</td>
													

										
                                         </tr>
											<?php } ?>
									
                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
				</div>
