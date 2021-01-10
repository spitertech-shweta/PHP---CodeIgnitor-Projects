<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>FEATURES DETAILS</h3></div>
                                    <div class="card-body" class="table-actions">
									<a href="<?php echo base_url().'admin/features_page'?>"><button type="button" class="btn btn-primary">ADD&nbsp;&nbsp;</button></a>
									<a href="<?php echo base_url().'admin/trash_features_0/'?>"><button type="button" class="btn btn-primary pull-left">TRASH</button></a>
                                    <br><br>
                                        <table id="data_table" class="table table-condensed table-striped  table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">Feature Id</th>
                                                    <th style="width:130px">Feature Image</th>
                                                    <th style="width:130px">Feature Title</th>
                                                   
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action;</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($show_feature as $show_feature_details){?>

                                             <tr>
											       <td><?php echo $show_feature_details->feature_id; ?></td>
													<td><img src="<?php echo base_url().$show_feature_details->feature_icon_img; ?>" class="table-user-thumb" alt=""></td>
                                                    <td><?php echo $show_feature_details->feature_icon_title ?></td>
                                                   
                                                	<?php
                                                            $status ="";
                                                            if($show_feature_details->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($show_feature_details->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>



													<td><div class="table-actions">
															<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/view_features/'.$show_feature_details->feature_id;?>">VIEW</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/edit_features/'.$show_feature_details->feature_id;?>">EDIT</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/onDelete_update_features/'.$show_feature_details->feature_id;?>">DELETE</a></button>
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
