<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>CONTACT ENQUIRY</h3></div>
                                    <div class="card-body" class="table-actions">
                                    <a href="<?php echo base_url().'admin/trash_contact_enquiry_0/'?>"><button type="button" class="btn btn-primary pull-left">TRASH</button></a>

                                    <br><br>
                                        <table id="data_table" class="table table-condensed table-striped  table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">Contact Id</th>
                                                    <th style="width:130px">User Name</th>
                                                    <th style="width:130px">User Email</th>
                                                    <th style="width:130px">User Mobile</th>
                                                  
													<th>&nbsp;</th>
													<th>Action</th>
													<th>&nbsp;</th>
													<th></th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($show_contact_enquiry as $show_contact_enquiry_details){?>

                                             <tr>
											       <td><?php echo $show_contact_enquiry_details->contact_id; ?></td>
                                                    <td><?php echo $show_contact_enquiry_details->contact_name; ?></td>
                                                    <td><?php echo $show_contact_enquiry_details->contact_email; ?></td>
                                                    <td><?php echo $show_contact_enquiry_details->contact_mobile; ?></td>

                                                   

													<td><div class="table-actions">
															<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/view_contact_enquiry/'.$show_contact_enquiry_details->contact_id;?>">VIEW</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/onDelete_update_contact_enquiry/'.$show_contact_enquiry_details->contact_id;?>">DELETE</a></button>
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
