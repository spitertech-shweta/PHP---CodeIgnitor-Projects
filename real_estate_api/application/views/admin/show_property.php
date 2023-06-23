<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row" style="padding-top: 7%; padding-left: 25%; padding-right: 25%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>PROPERTIES</h3></div>
                                    <div class="card-body" class="table-actions">
									<a href="<?php echo base_url().'admin/property/'?>"><button type="button" class="btn btn-primary">ADD PROPERTY &nbsp;&nbsp;</button></a>
									<a href="<?php echo base_url().'admin/trash_property_0/'?>"><button type="button" class="btn btn-primary pull-left">TRASH</button></a>

                                        <table id="data_table" class="table table-condensed table-striped  table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:40px">Id</th>
                                                    <th style="width:130px">PROPERTY NAME</th>
                                                    <th style="width:130px">PROPERTY IMAGE</th>
                                                    <th style="width:130px">PROPERTY PRICE</th>
		
                                                    <th style="width:160px">PROPERTY ADDRESS</th>
                                                    <th style="width:160px">PROPERTY TYPE</th>
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action;</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($property as $property_listing){?>

                                             <tr>
											       <td><?php echo $property_listing->property_id; ?></td>
													<td><?php echo $property_listing->property_name; ?></td>
                                                    <td><img src="<?php echo base_url().$property_listing->property_main_img;?>" class="table-user-thumb" alt=""></td>
                                                    <td><?php echo $property_listing->property_price; ?></td>
												
													<td><?php echo $property_listing->property_address; ?></td>
													<td><?php echo $property_listing->property_type;?></td>

                                                   
												
                                                	<?php
                                                            $status ="";
                                                            if($property_listing->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($property_listing->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>



													<td><div class="table-actions">
															<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/view_property/'.$property_listing->property_id;?>">VIEW</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/edit_property/'.$property_listing->property_id;?>">EDIT</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/onDelete_update_property/'.$property_listing->property_id;?>">DELETE</a></button>
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
