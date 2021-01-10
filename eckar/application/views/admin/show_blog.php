<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>BLOG DETAILS</h3></div>
                                    <div class="card-body" class="table-actions">
									<a href="<?php echo base_url().'admin/blog_page'?>"><button type="button" class="btn btn-primary">ADD&nbsp;&nbsp;</button></a>
									<a href="<?php echo base_url().'admin/trash_blog_0/'?>"><button type="button" class="btn btn-primary pull-left">TRASH</button></a>
                                    <br><br>
                                        <table id="data_table" class="table table-condensed table-striped  table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">Blog Id</th>
                                                    <th style="width:130px">Blog Image</th>
                                                    <th style="width:130px">Blog Title</th>
                                                   
                                                    <th style="width:130px">Blog Owner</th>
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action;</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($show_blog as $show_blog_details){?>

                                             <tr>
											       <td><?php echo $show_blog_details->blog_id; ?></td>
													<td><img src="<?php echo base_url().$show_blog_details->blog_img; ?>" class="table-user-thumb" alt=""></td>
                                                    <td><?php echo $show_blog_details->blog_title ?></td>
                                                   
                                                    <td><?php echo $show_blog_details->blog_owner ?></td>
                                                	<?php
                                                            $status ="";
                                                            if($show_blog_details->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($show_blog_details->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>



													<td><div class="table-actions">
															<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/view_blog/'.$show_blog_details->blog_id;?>">VIEW</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/edit_blog/'.$show_blog_details->blog_id;?>">EDIT</a></button>
														</div>
													</td>
													<td><div class="table-actions">
													<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/onDelete_update_blog/'.$show_blog_details->blog_id;?>">DELETE</a></button>
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
