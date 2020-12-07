<div class="row">
    <div class ="col-md-3"></div>			
		<div class="row" style="padding-top: 7%; padding-left: 20%;"> 
             <div class="col-md-12">
                 <div class="card"> 
                    <div class="card-header"><h3>ADMIN USER INFORMATION</h3></div>
                    <div class="card-body">
					<button type="button" class="btn btn-primary pull-left"><a href="<?php echo base_url().'admin/add_admin/'?>">ADD</a></button>&nbsp;&nbsp;
					<button type="button" class="btn btn-primary pull-left"><a href="<?php echo base_url().'admin/trash_admin_record_status_0/'?>">TRASH</a></button>
					
                       <table id="data_table" class="table">
                             <thead>
                                 <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>Password</th>
									<th>Mobile</th>
									<th>Admin_role</th>
									<th>Status</th>
									<th>Action</th>
									<th>&nbsp;</th>
                                 </tr>
                             </thead>
                             <tbody><?php foreach($h as $row){?>
                              <tr>
                                     <td><?php echo $row->admin_id; ?></td>
                                     <td><?php echo $row->name; ?></td>
                                     <td><?php echo $row->email; ?></td>
                                     <td><?php echo $row->pwd; ?></td>
									 <td><?php echo $row->mobile; ?></td>
								     <?php
									 	$admin_role="";
										if($row->admin_role == '1')
										{
											$admin_role = "Super Admin";
										}
										else if($row->admin_role == '2')
										{
											$admin_role = "Admin";
										}
										else if($row->admin_role == '3')
										{
											$admin_role = "Mananger";
										}


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
									 <td><?php echo $admin_role; ?></td>
									 <td><?php echo $status; ?></td>

									<td><div class="table-actions">
									<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/edit_admin_data/'.$row->admin_id;?>">EDIT</a></button>
										</div>
									</td>
									<td><div>
									<button type="button" class="btn btn-primary"><a href="<?php echo base_url().'admin/onDelete_update_admin_data/'.$row->admin_id;?>">DELETE</a></button>
										</div>
									</td>
									
						
                          </tr>
							<?php } ?>
						<tr>
					    	</td>
						</tr>
                              
                             </tbody>
                         </table>
                      </div>
                 </div>
             </div> 
         </div>
</div>
