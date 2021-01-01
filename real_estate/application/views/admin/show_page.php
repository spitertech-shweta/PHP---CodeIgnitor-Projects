<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row" style="padding-top: 7%; padding-left: 25%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>PAGE DETAILS</h3></div>
                                    <div class="card-body" class="table-actions">
									<a href="<?php echo base_url().'admin/about_page/'?>"><button type="button" class="btn btn-primary">ADD PAGE &nbsp;&nbsp;</button></a>
									<a href="<?php echo base_url().'admin/trash_page_0/'?>"><button type="button" class="btn btn-primary pull-left">TRASH</button></a>

                                        <table id="data_table" class="table table-condensed table-striped  table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">Page Id</th>
                                                    <th style="width:130px">Page Name</th>
                                                    <th style="width:130px">Page Image</th>
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action;</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($show_page as $row){?>

                                             <tr>
											       <td><?php echo $row->page_id; ?></td>
													<td><?php echo $row->page_name; ?></td>
													<td><img src="<?php echo base_url().$row->page_img; ?>" class="table-user-thumb" alt=""></td>
													<?php
                                                            $status ="";
                                                            if($row->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($row->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>



													<td><div class="table-actions">
															<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/view_page/'.$row->page_id;?>">VIEW</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/edit_page/'.$row->page_id;?>">EDIT</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/onDelete_update_page/'.$row->page_id;?>">DELETE</a></button>
														</div>
													</td>
													

                                         </tr>
											<?php } ?>
									
                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
				</div>
