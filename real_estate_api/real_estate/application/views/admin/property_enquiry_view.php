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
                                                    <th style="width:50px">Enquiry Id</th>
                                                    <th style="width:130px">Client Name</th>
                                                    <th style="width:130px">Client Eamil</th>
                                                    <th style="width:130px">Client Mobile</th>
                                                    <th style="width:130px">Client Message</th>
                                                    <th style="width:130px">Property Name</th>
                                                    <th>&nbsp;&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody><?php foreach($property_enquiry as $enquiry_listing){?>

                                             <tr>
                                                    <td><?php echo $enquiry_listing->enquiry_id; ?></td>
											        <td><?php echo $enquiry_listing->name; ?></td>
													<td><?php echo $enquiry_listing->email; ?></td>
                                                    <td><?php echo $enquiry_listing->mobile; ?></td>
                                                    <td><?php echo $enquiry_listing->msg; ?></td>
                                                    <td><?php echo $enquiry_listing->property_name; ?></td>
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
