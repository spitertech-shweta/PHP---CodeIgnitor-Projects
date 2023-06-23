
        <form method = "POST"  action="<?php echo base_url()?>admin/add_social_sharing">
        <div class ="row">
        <div class ="col-md-3"></div>
          
          <div class="row" style="padding-top: 7%; padding-left: 30%; padding-right: 10%;">     
            
             <div class="col-md-9">
                 <div class="form-group">
                 <h5 style ="width:600px"> <label>Facebook</label> <input type="text" class="form-control" id="facebook" name="facebook" placeholder="facebook link"></h5>
                 </div>
             </div>

             <div class="col-md-9">
                 <div class="form-group">
                 <h5 style ="width:600px"> <label>Whatsapp</label> <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="whatsapp link"></h5>
                 </div>
             </div>

             <div class="col-md-9">
                 <div class="form-group">
                 <h5 style ="width:600px"> <label>Instagram</label> <input type="text" class="form-control" id="instagram" name="instagram" placeholder="instagram link"></h5>
                 </div>
             </div>

             <div class="col-md-9">
                 <div class="form-group">
                 <h5 style ="width:600px"> <label>Twitter </label> <input type="text" class="form-control" id="twitter" name="twitter" placeholder="twitter link"></h5>
                 </div>
             </div>

             <div class="col-md-9">
                 <div class="form-group">
                 <h5 style ="width:600px"> <label>Linked In</label> <input type="text" class="form-control" id="linked_in" name="linked_in" placeholder="linked In link"></h5>
                 </div>
             </div>

             <div class="col-md-9">
                 <div class="form-group">		 
                     <input type="submit" class="btn btn-primary" id="submit" value="SUBMIT">
                     <a href="<?php echo base_url().'admin/show_social_sharing/'?>"> <button type="button" class="btn btn-primary">CANCEL</button></a>
                 </div>
             </div>
            
              </div>
            </div>  
          </div>                                                               
        </form>  
      


<!------------- Validations--------------->
<script type='text/javascript'>
$(document).ready(function() {
  validate();
  $('input').on('keyup', validate);
});

function validate() {
  var inputsWithValues = 0;
  
  // get all input fields except for type='submit'
  var myInputs = $("input:not([type='submit'])");

  myInputs.each(function(e) {
    // if it has a value, increment the counter
    if ($(this).val()) {
      inputsWithValues += 1;
    }
  });

  if (inputsWithValues == myInputs.length) {
    $("input[type=submit]").prop("disabled", false);
  } else {
    $("input[type=submit]").prop("disabled", true);
  }
}

</script>