                <div class="row">
                    <div class ="col-md-3"></div>			
					
					
						<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;"> 
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>TRASH HOME</h3></div>
                                    <div class="card-body">
                                   <a href="<?php echo base_url().'admin/show_home/'?>"> <button type="button" class="btn btn-primary">SHOW HOME</button></a>
                                    <br><br>  
                                        <table id="data_table" class="table">
                                        <thead>
                                                <tr>
                                                    <th style="width:50px">Home Id</th>
                                                    <th style="width:130px">App Image</th>
                                                    <th style="width:130px">status</th>

													<th>&nbsp;</th>
													<th>Action</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($home_trash as $trash_home_details){?>

                                             <tr>
											        <td><?php echo $trash_home_details->home_id; ?></td>
													<td><img src="<?php echo base_url().$trash_home_details->home_app_img; ?>" class="table-user-thumb" alt=""></td>
                                                 

                                                	<?php
                                                            $status ="";
                                                            if($trash_home_details->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($trash_home_details->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/view_home/'.$trash_home_details->home_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/recover_home/'.$trash_home_details->home_id;?>"><button type="button" class="btn btn-primary">RECOVER</button></a>
													</div></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_home/'.$trash_home_details->home_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a>
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
