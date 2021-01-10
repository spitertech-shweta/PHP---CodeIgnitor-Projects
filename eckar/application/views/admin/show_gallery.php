<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>GALLERY DETAILS</h3></div>
                                    <div class="card-body" class="table-actions">
									<a href="<?php echo base_url().'admin/gallery_page'?>"><button type="button" class="btn btn-primary">ADD&nbsp;&nbsp;</button></a>
									<a href="<?php echo base_url().'admin/trash_gallery_0/'?>"><button type="button" class="btn btn-primary pull-left">TRASH</button></a>
                                    <br><br>
                                        <table id="data_table" class="table table-condensed table-striped  table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">Gallery Id</th>
                                                    <th style="width:130px">Gallery Image</th>
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action;</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($show_gallery as $show_gallery_details){?>

                                             <tr>
											       <td><?php echo $show_gallery_details->gallery_id; ?></td>
                                                   <td><img src = "<?php echo base_url().$show_gallery_details->gallery_latest_app_image; ?>" width="150" height="150"/></td>
                                                	<?php
                                                            $status ="";
                                                            if($show_gallery_details->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($show_gallery_details->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>



													<td><div class="table-actions">
															<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/view_gallery/'.$show_gallery_details->gallery_id;?>">VIEW</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/edit_gallery/'.$show_gallery_details->gallery_id;?>">EDIT</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/onDelete_update_gallery/'.$show_gallery_details->gallery_id;?>">DELETE</a></button>
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
