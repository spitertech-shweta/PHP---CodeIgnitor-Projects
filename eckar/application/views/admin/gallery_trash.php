<div class="row">
                    <div class ="col-md-3"></div>			
					<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;"> 
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>GALLERY TRASH</h3></div>
                                    <div class="card-body">
                                   <a href="<?php echo base_url().'admin/show_gallery/'?>"> <button type="button" class="btn btn-primary">GALLERY</button></a>
                                       <br><br> 
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">Gallery Id</th>
                                                    <th style="width:130px">Gallery Image</th>
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action;</th>
													<th>&nbsp;</th>
													<th></th>
                                                   
                                                   
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($gallery_trash as $gallery_trash_details){?>

                                            <tr>
                                            
                                            <td><?php echo $gallery_trash_details->gallery_id; ?></td>
													<td><img src="<?php echo base_url().$gallery_trash_details->gallery_latest_app_image; ?>" class="table-user-thumb" alt=""></td>
                                                	<?php
                                                            $status ="";
                                                            if($gallery_trash_details->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($gallery_trash_details->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/view_gallery/'.$gallery_trash_details->gallery_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/recover_gallery/'.$gallery_trash_details->gallery_id;?>"><button type="button" class="btn btn-primary">RECOVER</button></a>
													</div></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_gallery/'.$gallery_trash_details->gallery_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a>
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
