<div class="row">
                    <div class ="col-md-3"></div>			
					<div class="row"> 
                            <div class="col-md-12">
                                <div class="card" style = "padding-right:100px; padding-left:350px; padding-top:80px;padding-bottom:80px;">
                                    <div class="card-header"><h3>TESTIMONIAL TRASH</h3></div>
                                    <div class="container-fluid"><a href="<?php echo base_url().'admin/show_testimonial/'?>"> <button type="button" class="btn btn-primary float-right">SHOW TESTIMONIAL</button></a></div>
                                    <div class="card-body">
                                      
                                        <table id="data_table" class="table table-bordered">
                                            <thead>
                                            <tr>
                                                    <th style="width:130px">Client Id</th>
                                                    <th style="width:130px">Client Name</th>
                                                    <th style="width:130px">Client quote</th>
                                                    <th style="width:130px">Client Designation</th>
                                                    <th style="width:130px">Client Image</th>
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action</th>
													<th>&nbsp;</th>
													
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($testimonial_trash as $testimonial_trash_listing){?>
                                            <tr>
                                                    <td><?php echo $testimonial_trash_listing->client_id; ?></td>
                                                    <td><?php echo $testimonial_trash_listing->client_name; ?></td>
                                                    <td><?php echo $testimonial_trash_listing->client_quote ?></td>
                                                    <td><?php echo $testimonial_trash_listing->client_designation ?></td>

													<td><img src="<?php echo base_url().$testimonial_trash_listing->client_img; ?>" class="table-user-thumb" alt=""></td>
                                                 
                                                	<?php
                                                            $status ="";
                                                            if($testimonial_trash_listing->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($testimonial_trash_listing->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/view_testimonial/'.$testimonial_trash_listing->client_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/recover_testimonial/'.$testimonial_trash_listing->client_id;?>"><button type="button" class="btn btn-primary">RECOVER</button></a>
													</div></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_testimonial/'.$testimonial_trash_listing->client_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a>
													</div></td>
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
