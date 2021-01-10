<div class="row">
                    <div class ="col-md-3"></div>			
					<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;"> 
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>TRASH PAGES</h3></div>
                                    <div class="card-body">
                                   <a href="<?php echo base_url().'admin/show_about/'?>"> <button type="button" class="btn btn-primary">ABOUT</button></a>
                                       <br><br> 
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                <th style="width:50px">About Id</th>
                                                    <th style="width:130px">Icon Image</th>
                                                    <th style="width:130px">Icon Title</th>
                            
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action;</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                    <th></th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($about_trash as $about_trash_details){?>

                                                <tr>
											       <td><?php echo $about_trash_details->about_id; ?></td>
													<td><img src="<?php echo base_url().$about_trash_details->about_icon_img; ?>" class="table-user-thumb" alt=""></td>
                                                    <td><?php echo $about_trash_details->about_icon_title ?></td>
                                                    
                                                	<?php
                                                            $status ="";
                                                            if($about_trash_details->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($about_trash_details->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>



													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/view_about/'.$about_trash_details->about_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/recover_about/'.$about_trash_details->about_id;?>"><button type="button" class="btn btn-primary">RECOVER</button></a>
													</div></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_about/'.$about_trash_details->about_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a>
													</div></td>
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
