<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>HOME DETAILS</h3></div>
                                    <div class="card-body" class="table-actions">
									<a href="<?php echo base_url().'admin/home_page'?>"><button type="button" class="btn btn-primary">ADD HOME &nbsp;&nbsp;</button></a>
									<a href="<?php echo base_url().'admin/trash_home_0/'?>"><button type="button" class="btn btn-primary pull-left">TRASH</button></a>
                                    <br><br>
                                        <table id="data_table" class="table table-condensed table-striped  table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">Home Id</th>
                                                    <th style="width:130px">App Image</th>
                                                    <th style="width:130px">status</th>

													<th>&nbsp;</th>
													<th>Action</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($show_home as $show_home_details){?>

                                             <tr>
											        <td><?php echo $show_home_details->home_id; ?></td>
													<td><img src="<?php echo base_url().$show_home_details->home_app_img; ?>" class="table-user-thumb" alt=""></td>
                                            

                                                	<?php
                                                            $status ="";
                                                            if($show_home_details->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($show_home_details->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>



													<td><div class="table-actions">
															<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/view_home/'.$show_home_details->home_id;?>">VIEW</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/edit_home/'.$show_home_details->home_id;?>">EDIT</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/onDelete_update_home/'.$show_home_details->home_id;?>">DELETE</a></button>
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
