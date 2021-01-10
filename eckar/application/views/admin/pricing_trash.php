<div class="row">
                    <div class ="col-md-3"></div>			
					
					
						<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;"> 
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>TRASH PRICING</h3></div>
                                    <div class="card-body">
                                   <a href="<?php echo base_url().'admin/show_pricing/'?>"> <button type="button" class="btn btn-primary">SHOW PRICING</button></a>
                                    <br><br>  
                                        <table id="data_table" class="table">
                                        <thead>
                                                <tr>
                                                    <th style="width:50px">Price Id</th>
                                                    <th style="width:130px">Price Title</th>
                                                    <th style="width:130px">Price</th>   <th style="width:130px">Price Description</th>
                                                    <th style="width:130px">status</th>

													<th>&nbsp;</th>
													<th>Action</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($pricing_trash as $trash_pricing_details){?>

                                             <tr>
                                                    <td><?php echo $trash_pricing_details->pricing_id; ?></td>
                                                    <td><?php echo $trash_pricing_details->pricing_title; ?></td>
                                                    <td><?php echo $trash_pricing_details->price; ?></td>
                                                  

                                                	<?php
                                                            $status ="";
                                                            if($trash_pricing_details->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($trash_pricing_details->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/view_pricing/'.$trash_pricing_details->pricing_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/recover_pricing/'.$trash_pricing_details->pricing_id;?>"><button type="button" class="btn btn-primary">RECOVER</button></a>
													</div></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_pricing/'.$trash_pricing_details->pricing_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a>
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
