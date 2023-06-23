<div class="row">
                    <div class ="col-md-3"></div>			
						<div class="row" style="padding-top: 7%; padding-left: 25%; padding-right: 25%;"> 
                            <div class="col-md-12">
                                <div class="card"> 
                                    <div class="card-header"><h3>Client Enquiries </h3></div>
                                    <div class="card-body" class="table-actions">
								

                                        <table id="data_table" class="table table-condensed table-striped  table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:130px">Name</th>
                                                    <th style="width:130px">Eamil</th>
                                                    <th style="width:130px">Mobile</th>
                                                    <th style="width:130px">Message</th>
                                                    <th>&nbsp;&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($contact as $contact_listing){?>

                                             <tr>
											        <td><?php echo $contact_listing->name; ?></td>
													<td><?php echo $contact_listing->email; ?></td>
                                                    <td><?php echo $contact_listing->phone_no; ?></td>
                                                    <td><?php echo $contact_listing->msg; ?></td>
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
