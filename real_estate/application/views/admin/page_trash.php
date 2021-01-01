                <div class="row">
                    <div class ="col-md-3"></div>			
					
					
						<div class="row" style="padding-top: 7%; padding-left: 20%;"> 
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>TRASH PAGES</h3></div>
                                    <div class="card-body">
                                    <button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/show_page/'?>">SHOW PAGES</a></button>
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px">Page Id</th>
                                                    <th style="width:130px">Page Name</th>
													<th style="width:130px">Page URL</th>
													<th style="width:130px">Page Description</th>
                                                    <th style="width:130px">Page Image</th>
                                                    <th style="width:130px">Status</th>

													<th>&nbsp;</th>
													<th>Action;</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
			
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($page_trash as $row){?>

                                             <tr>
                                                    <td><?php echo $row->page_id; ?></td>
                                                    <td><?php echo $row->page_name; ?></td>
                                                    <td><?php echo $row->page_url; ?></td>
                                                    <td><?php echo $row->page_description; ?></td>
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
														<a href="<?php echo base_url().'admin/view_page/'.$row->page_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
														</div>
													</td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/recover_page/'.$row->page_id;?>"><button type="button" class="btn btn-primary">RECOVER</button></a>
													</div></td>
													<td><div class="table-actions">
														<a href="<?php echo base_url().'admin/delete_page/'.$row->page_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a>
													</div></td>
													
                                         </tr>
											<?php } ?>
			
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
				</div>
