                <div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row" style="padding-top: 7%; padding-left: 25%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>BLOGS</h3></div>
                                    <div class="card-body" class="table-actions">
									<a href="<?php echo base_url().'admin/blog/'?>"><button type="button" class="btn btn-primary">ADD BLOG &nbsp;&nbsp;</button></a>
									<a href="<?php echo base_url().'admin/trash_blog_0/'?>"><button type="button" class="btn btn-primary pull-left">TRASH</button></a>

                                        <table id="data_table" class="table table-condensed table-striped  table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">Blog Id</th>
                                                    <th style="width:130px">Blog Name</th>
                                                    <th style="width:130px">Blog Image</th>
													<th style="width:160px">Blog Date</th>
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action;</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($blog as $blog_listing){?>

                                             <tr>
											       <td><?php echo $blog_listing->blog_id; ?></td>
													<td><?php echo $blog_listing->blog_name; ?></td>
													<td><img src="<?php echo base_url().$blog_listing->blog_img; ?>" class="table-user-thumb" alt=""></td>
													<td><?php echo $blog_listing->blog_date; ?></td>
                                                   
												
                                                	<?php
                                                            $status ="";
                                                            if($blog_listing->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($blog_listing->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>



													<td><div class="table-actions">
															<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/view_blog/'.$blog_listing->blog_id;?>">VIEW</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/edit_blog/'.$blog_listing->blog_id;?>">EDIT</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/onDelete_update_blog/'.$blog_listing->blog_id;?>">DELETE</a></button>
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
