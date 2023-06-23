
        <form method = "POST" id = "myForm" action="<?php echo base_url()?>admin/add_user_designation"  enctype='multipart/form-data'>
        <div class ="row">
        <div class ="col-md-3"></div>
          
          <div class="row" style="padding-top: 7%; padding-left: 30%; padding-right: 10%;">     
                    <div class="col-md-9">
                        <div class="form-group">
                        <a href="<?php echo base_url().'admin/show_user_designation/'?>"> <button type="button" class="btn btn-primary">SHOW USER DESIGNATION</button></a>
                        <br><br>
                        <h3 style ="width:600px"><input type="text" class="form-control" id="user_designation" name="user_designation" placeholder="User Designation"></h3>
                        <h6 style ="color:red;"><?php echo $this->session->flashdata('designation Field Empty'); ?></h6> 
                        <h6 style ="color:red;"><?php echo $this->session->flashdata('Repeated Designation'); ?></h6> 

                        </div>
                    </div>
                  
                      <div class="col-md-9">
                        <div class="form-group">		 
                        <input type="submit" class="btn btn-primary mr-2" id="submit" value="SUBMIT">
                        <a href="<?php echo base_url().'admin/show_user_designation/'?>"> <button type="button" class="btn btn-primary">CANCEL</button></a>
                        </div>
                      </div>
              </div>
            </div>  
          </div>                                                               
        </form>  
      
       

