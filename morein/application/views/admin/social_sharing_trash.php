<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row"> 
                            <div class="col-md-12">
                                <div class="card" style = "padding-right:100px; padding-left:350px; padding-top:80px;padding-bottom:80px;"> 
                                    <div class="card-header"><h3>SOCAIL SHARING TRASH</h3></div>
                                    <div class="container-fluid"><a href="<?php echo base_url().'admin/service'?>"><button type="button" style="margin:5px;"  class="btn btn-primary float-right">ADD&nbsp;&nbsp;</button></a>
                                    <a href="<?php echo base_url().'admin/show_social_sharing/'?>"> <button type="button" class="btn btn-primary">SHOW SOCAIL SHARING</button></a>
                                    <div class="card-body" class="table-actions">
                                        <table id="data_table" class="table table-condensed table-striped  table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">Facebook</th>
                                                    <th style="width:130px">Instagram</th>
                                                    <th style="width:130px">Linked_in</th>
													<th style="width:130px">Twitter</th>
                                                    <th style="width:130px">Whatsapp</th>
                                                    <th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($social_sharing_trash as $social_sharing_trash_listing){?>

                                             <tr>
                                                   <td><?php echo $social_sharing_trash_listing->facebook; ?></td>
                                                   <td><?php echo $social_sharing_trash_listing->instagram; ?></td>
                                                   <td><?php echo $social_sharing_trash_listing->linked_in; ?></td>
                                                   <td><?php echo $social_sharing_trash_listing->twitter; ?></td>
                                                   <td><?php echo $social_sharing_trash_listing->whatsapp; ?></td>

                                                	<?php
                                                            $status ="";
                                                            if($social_sharing_trash_listing->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($social_sharing_trash_listing->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>



													<td><div class="table-actions">
															<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/view_social_sharing/'.$social_sharing_trash_listing->social_sharing_id;?>">VIEW</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/recover_social_sharing/'.$social_sharing_trash_listing->social_sharing_id;?>">RECOVER</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/delete_social_sharing/'.$social_sharing_trash_listing->social_sharing_id;?>">DELETE</a></button>
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
