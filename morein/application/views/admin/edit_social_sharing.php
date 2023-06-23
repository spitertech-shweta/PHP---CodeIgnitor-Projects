
        <form method = "POST" id = "add_icon" action="<?php echo base_url()?>admin/update_social_sharing"  enctype='multipart/form-data'>
        <div class ="row">
        <div class ="col-md-3"></div>
          
          <div class="row" style="padding-top: 7%; padding-left: 30%; padding-right: 10%;">     
            
             <div class="col-md-9">
                 <div class="form-group">
                    
                 <h5 style ="width:600px"> <label>Facebook</label> <input type="text" class="form-control" id="facebook" name="facebook" value= "<?php echo $edit_social_sharing->facebook ?>" placeholder="facebook link" ></h5>
                 <h7 style = 'color:red;'><?php echo $this->session->flashdata('facebook url');  ?></h7>
                 </div>
             </div>

             <div class="col-md-9">
                 <div class="form-group">
                 <h5 style ="width:600px"> <label>Whatsapp</label> <input type="text" class="form-control" id="whatsapp" name="whatsapp" value= "<?php echo $edit_social_sharing->whatsapp ?>" placeholder="whatsapp link"></h5>
                 <h7 style = 'color:red;'><?php echo $this->session->flashdata('whatsapp url');  ?></h7>
                 </div>
             </div>

             <div class="col-md-9">
                 <div class="form-group">
                 <h5 style ="width:600px"> <label>Instagram</label> <input type="text" class="form-control" id="instagram" name="instagram" value= "<?php echo $edit_social_sharing->instagram ?>" placeholder="instagram link"></h5>
                 <h7 style = 'color:red;'><?php echo $this->session->flashdata('instagram url');  ?></h7>
                 </div>
             </div>

             <div class="col-md-9">
                 <div class="form-group">
                 <h5 style ="width:600px"> <label>Twitter </label> <input type="text" class="form-control" id="twitter" name="twitter" value= "<?php echo $edit_social_sharing->twitter ?>" placeholder="twitter link"></h5>
                 <h7 style = 'color:red;'><?php echo $this->session->flashdata('twitter url');  ?></h7>
                 </div>
             </div>

             <div class="col-md-9">
                 <div class="form-group">
                 <h5 style ="width:600px"> <label>Linked In </label> <input type="text" class="form-control" id="linked_in" name="linked_in" value= "<?php echo $edit_social_sharing->linked_in ?>" placeholder="linked in link"></h5>
                 <h7 style = 'color:red;'><?php echo $this->session->flashdata('linked_in url');  ?></h7>                 </div>
             </div>

             <div class="col-md-9">
                 <div class="form-group">	
                    <input type="submit" class="btn btn-primary" id="submit" value="SUBMIT">
                 </div>
             </div>
            
              </div>
            </div>  
          </div>                                                               
        </form>  
      




