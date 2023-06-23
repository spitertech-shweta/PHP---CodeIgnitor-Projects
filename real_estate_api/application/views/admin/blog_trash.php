<div class="row">
                    <div class ="col-md-3"></div>			
					<div class="row" style="padding-top: 7%; padding-left: 30%; padding-right:30%;"> 
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>TRASH PAGES</h3></div>
                                    <div class="card-body">
                                   <a href="<?php echo base_url().'admin/show_blog/'?>"> <button type="button" class="btn btn-primary">BLOGS</button></a>
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                <th style="width:50px">Blog Id</th>
                                                    <th style="width:130px">Blog Name</th>
                                                    <th style="width:130px">Blog Content</th>
                                                    <th style="width:130px">Blog Image</th>
													<th style="width:130px">Blog Date</th>
													<th style="width:130px">Status</th>
													<th>&nbsp;</th>
													<th>Action;</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
                                                    <th></th>
			
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($blog_list as $trash_blog){?>

                                            <tr>
                                                <td><?php echo $trash_blog->blog_id; ?></td>
											    <td><?php echo $trash_blog->blog_name; ?></td>
                                                <td><?php echo $trash_blog->blog_content; ?></td>
											    <td><img src="<?php echo base_url().$trash_blog->blog_img; ?>" class="table-user-thumb" alt=""></td>
												<td><?php echo $trash_blog->blog_date; ?></td>
                                                   
												
                                                	<?php
                                                            $status ="";
                                                            if($trash_blog->status=="1")
                                                            {
                                                                $status ="ACTIVE";
                                                            }
                                                            else if($trash_blog->status=="0")
                                                            {
                                                                $status ="INACTIVE";
                                                            }
                                                        ?>
													
													<td><?php echo $status; ?></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/view_blog/'.$trash_blog->blog_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/recover_blog/'.$trash_blog->blog_id;?>"><button type="button" class="btn btn-primary">RECOVER</button></a>
													</div></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_blog/'.$trash_blog->blog_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a>
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
