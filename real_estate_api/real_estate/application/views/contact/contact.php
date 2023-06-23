<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo  base_url();?>">Home</a> / Contact Us</span>
    <h2>Contact Us</h2>
</div>
</div>
<!-- banner -->

<form method = "post" action="<?php echo base_url().'insert_contact'?>">
<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">
                   
                <h6 style = "color:red;"><B><?php echo $this->session->flashdata('error');?></B></h6> 
                <input type="text" name = "name" class="form-control" style="width:552px;"  placeholder="Full Name *">
                <input type="text" name = "email" class="form-control" style="width:552px;" placeholder="Email Address">
                <input type="tel" name = "phone_no" class="form-control" style="width:552px;" placeholder="Contact Number *">
                <textarea rows="6" name = "msg" class="form-control" style="width:552px;" placeholder="Message"></textarea>
               <button type="submit" class="btn btn-success" name="Submit">Send Message</button>
              

                
  </div>
  <div class="col-lg-6 col-sm-6 ">

  <div class="well"><div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Gurupushpa%20Apartment%20parijat%20nagar%20nashik+(SpiterTech%20Solutions)&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
  </div>
</div>
</div>
</div>
</form>
