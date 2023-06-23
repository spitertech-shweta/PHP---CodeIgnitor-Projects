<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row"> 
                            <div class="col-md-12">
                                <div class="card" style = "padding-right:100px; padding-left:350px; padding-top:80px;padding-bottom:80px;"> 
                                    <div class="card-header"><h3>CONTACT ENQUIRY</h3></div>
                                   
                                    <div class="card-body" class="table-actions">
                                    
                                        <table id="data_table"  class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width:160px">Name</th>
                                                    <th style="width:140px">Email</th>
                                                    <th style="width:140px">Mobile</th>
													<th>Action</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($show_contact_enquiry as $show_contact_enquiry_details){?>

                                             <tr>
                                                    <td><?php echo $show_contact_enquiry_details->contact_name; ?></td>
                                                    <td><?php echo $show_contact_enquiry_details->contact_email; ?></td>
                                                    <td><?php echo $show_contact_enquiry_details->contact_mobile; ?></td>
                                                    <td><div class="table-actions">
															<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/view_contact_enquiry/'.$show_contact_enquiry_details->contact_id;?>">VIEW</a></button>
														</div>
													</td>
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
