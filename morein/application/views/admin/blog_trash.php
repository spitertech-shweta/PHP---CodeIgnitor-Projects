<div class="row">
                    <div class ="col-md-3"></div>			
					<div class="row"> 
                            <div class="col-md-12">
                                <div class="card" style = "padding-right:100px; padding-left:350px; padding-top:80px;padding-bottom:80px;">
                                    <div class="card-header"><h3>BLOG TRASH</h3></div>
                                    <div class="container-fluid"><a href="<?php echo base_url().'admin/show_blog/'?>"> <button type="button" class="btn btn-primary float-right">SHOW BLOG</button></a></div>

                                    <div class="card-body">
                                        <table id="data_table" class="table table-bordered">
                                            <thead>
                                            <tr>
                                                    <th style="width:50px">Blog Id</th>
                                                    <th style="width:130px">Blog Image</th>
                                                    <th style="width:130px">Blog Title</th>
                                                    <th style="width:130px">Posted On</th>
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($blog_trash as $blog_trash_details){?>

                                            <tr>
                                            
                                                    <td><?php echo $blog_trash_details->blog_id; ?></td>
													<td><img src="<?php echo base_url().$blog_trash_details->blog_img; ?>" class="table-user-thumb" alt=""></td>
                                                    <td><?php echo $blog_trash_details->blog_title ?></td>
                                                    <td><?php echo $blog_trash_details->blog_date ?></td>
                                                	<?php
                                                            $status ="";
                                                            if($blog_trash_details->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($blog_trash_details->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/view_blog/'.$blog_trash_details->blog_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/recover_blog/'.$blog_trash_details->blog_id;?>"><button type="button" class="btn btn-primary">RECOVER</button></a>
													</div></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_blog/'.$blog_trash_details->blog_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a>
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
