                <div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row"> 
                            <div class="col-md-12">
                                <div class="card"  style = "padding-right:100px; padding-left:350px; padding-top:80px;padding-bottom:80px;"> 
                                    <div class="card-header"><h3>CLIENT DETAILS</h3></div>
                                    <div class="container-fluid">
									    <a href="<?php echo base_url().'admin/trash_client_0/'?>"><button type="button" style="margin:5px;" class="btn btn-primary float-right">TRASH</button></a>
                                        <a href="<?php echo base_url().'admin/client'?>"><button type="button" style="margin:5px;" class="btn btn-primary float-right">ADD&nbsp;&nbsp</button></a>
                                    </div>

                                    <div class="card-body" class="table-actions">                                       
                                        <table id="data_table"  class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">Id</th>
                                                    <th style="width:130px">Image</th>
                                                    <th style="width:130px">Title</th>
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action</th>
													<th>&nbsp;</th>
                                                    <th></th>
													
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($show_client as $show_client_details){?>

                                             <tr>
											       <td><?php echo $show_client_details->client_id; ?></td>
													<td><img src="<?php echo base_url().$show_client_details->client_img; ?>" class="table-user-thumb" alt=""></td>
                                                    <td><?php echo $show_client_details->client_title ?></td>
                                                   
                                                	<?php
                                                            $status ="";
                                                            if($show_client_details->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($show_client_details->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>



													<td><div class="table-actions">
															<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/view_client/'.$show_client_details->client_id;?>">VIEW</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/edit_client/'.$show_client_details->client_id;?>">EDIT</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/onDelete_update_client/'.$show_client_details->client_id;?>">DELETE</a></button>
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
            </div>
        </div>
