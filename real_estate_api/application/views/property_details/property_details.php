
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo  base_url();?>">Home</a> / Buy</span>
    <h2>Buy</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">

<div class="hot-properties hidden-xs">
<h4>Hot Properties</h4>
<?php foreach($hot_property as $hot_property_listing) { ?>
<div class="row">
                <div class="col-lg-4 col-sm-5"><a href = "<?php echo base_url().'api/property_details/'.$hot_property_listing->seo_url?>"><img src="<?php echo base_url().$hot_property_listing->property_main_img;?>" class="img-responsive img-circle" alt="properties" id= "hot_property"></a></div>
                <div class="col-lg-8 col-sm-7"  id ="search_property">
                <h5><a href = "<?php echo base_url().'api/property_details/'.$hot_property_listing->seo_url?>"><?php echo $hot_property_listing->property_name ?></a></h5>
                <p class="price"><?php echo $hot_property_listing->property_price ?></p> </div>
              </div>
<?php } ?>
</div>


<div class="advertisement">
  <h4>Advertisements</h4>
  <img src="<?php echo base_url()?>images/advertisements.jpg" class="img-responsive" alt="advertisement">

</div>

</div>

<div class="col-lg-9 col-sm-8 ">

<h2><?php echo $property_details->property_bedroom?>room and <?php echo $property_details->property_kitchen?>kitchen apartment</h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
   
  <?php if(!empty($images))  { ?>  
 
    <!-- Slider Starts -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $item_class = ' active';
                foreach($images as $slider_img) {
                ?>
                <div class="item<?php echo $item_class; ?>">
                    <img src="http://localhost/real_estate/<?php echo $slider_img->property_slider_img;?>"  alt="News1"  id = "image_property_details"/>
                    <div class="carousel-caption"> 
                        <p><?php  ?></p>
                    </div>
                </div>
                <?php  
                    $item_class = ''; 
                }
                ?>
            </div>
              
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

<?php } 
else
{ ?>
    <script> $('#myCarousel').hide() </script>

<?php } ?>

  </div>
  


  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <p><?php echo $property_details->property_details?></p>

  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
  </div>

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<p class="price"><img src = "<?php echo base_url();?>images/rupee.jpg" id = "property_details_rupee"/><?php echo $property_details->property_price?></p>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span><?php echo $property_details->property_address?></p>
  
  <div class="profile" id = "agent_details">
  <span class="glyphicon glyphicon-user"></span> Agent Details
  <p><?php 

        if($agent_details->agent_id == 0)
        {
          ?> <script> $('#agent_details').hide() </script>
      <?php  }
        else
        {
       echo $agent_details->agent_name;?><br></p>
      <p> <?php  echo $agent_details->agent_mobile; ?></p>
        <script> $('#agent_details').show() </script>
      <?php } ?>

  </div>
</div>

    <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
    <div class="listing-detail" class="w3-tooltip" title="regular tooltip"><span class="w3-text w3-tag w3-yellow" data-toggle="tooltip" data-placement="top" title="Bedroom Room"><?php echo $property_details->property_bedroom;?></span> <span class="w3-text w3-tag w3-yellow"  data-toggle="tooltip" data-placement="top" title="Living Room"><?php echo $property_details->property_living_room;?></span> <span class="w3-text w3-tag w3-yellow" data-toggle="tooltip" data-placement="top" title="Parking"><?php echo $property_details->property_parking;?></span> <span class="w3-text w3-tag w3-yellow" data-toggle="tooltip" data-placement="top" title="Kitchen"><?php echo $property_details->property_kitchen; ?></span> </div>

</div>
<div class="col-lg-12 col-sm-6 ">
<div class="enquiry">
  <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
  <form role="form" method ="post" action ="" autocomplete= "" >
               

  <input type="hidden" class="form-control" id = "property_id" value ="<?php echo $property_details->property_id?>"/>
                <input type="hidden" class="form-control" id = "property_name"  value ="<?php echo $property_details->property_name?>" />
                
                <label class="text-info" for="Name">Name</label><label style ="color:red">*</label>
                <input  type="text" name = "name" id = "name" class="form-control" placeholder="Full Name"  minlength = "2" required="required" />
                <div id="lblError_name" style="color: red;"></div>
                
                <label class="text-info" for="email">Email</label>
                <input  type="email" name = "email" id = "email" class="form-control" required="required" placeholder="you@yourdomain.com" />
                <div id="lblError_email" style="color: red;"></div>

                <label class="text-info" for="mobile">Mobile</label><label style ="color:red">*</label>
                <input  type="tel" name = "mobile" id = "mobile" class="form-control" required="required" placeholder="your number"  maxlength="10"/>
                <div id="lblError_mobile" style="color: red;"></div>
               
                <label class="text-info" for="message">Message</label>
                <textarea  rows="6" name= "msg" id = "msg" class="form-control" placeholder="Whats on your mind?" minlength = "10" required="required"></textarea>
               
                <input value="Send Message" class ="btn btn-primary" id="submit" onclick="property_enquiry(event)"  type="submit">
      </form>   
 </div>         
</div>
  </div>
</div>
</div>
</div>
</div>
</div>



<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
</script>


<script>
function property_enquiry(e)
{     
 
      e.preventDefault();
       var property_id     =     $('#property_id').val();
       var property_name   =     $('#property_name').val();
       var name            =     $('#name').val();
       var email           =     $('#email').val();
       var mobile          =     $('#mobile').val();
       var message         =     $('#msg').val();

		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var letters = /^[A-Za-z ]+$/;
    var number =/[2-9]{2}\d{8}/

    
		if(name=='')
		{
      $('#name').focus();
      document.getElementById("lblError_name").innerHTML = "Please Enter Your Name";
      document.getElementById("lblError_name").style.visibility = "visible";

      return false;
		}
		else if(!letters.test(name))
		{  
      document.getElementById("lblError_name").innerHTML = "Name field required only alphabet characters";
      document.getElementById("lblError_name").style.visibility = "visible";
      return false;
    }

		else if(email=='')
		{
      document.getElementById("lblError_name").style.visibility = "hidden";
			$('#email').focus();
      document.getElementById("lblError_email").style.visibility = "visible";
      return false; 
		}
		else if (!filter.test(email))
		{
      document.getElementById("lblError_name").style.visibility = "hidden";
      document.getElementById("lblError_email").innerHTML = "Please Enter Valid Email Id";
      document.getElementById("lblError_email").style.visibility = "visible";
      return false;
		}
    else if(mobile =='')
    {
      document.getElementById("lblError_name").style.visibility = "hidden";
      document.getElementById("lblError_email").style.visibility = "hidden";
      $('#mobile').focus();
      document.getElementById("lblError_mobile").innerHTML = "Mobile field required";
      return false;
    }
    else if (!number.test(mobile))
		{
      document.getElementById("lblError_email").style.visibility = "hidden";
      document.getElementById("lblError_name").style.visibility = "hidden";
			document.getElementById("lblError_mobile").innerHTML = "Mobile field required only 10 digit number";
      return false;
		}
    else
    {
      document.getElementById("lblError_mobile").style.visibility = "hidden";
      document.getElementById("lblError_email").style.visibility = "hidden";
      document.getElementById("lblError_name").style.visibility = "hidden";
    }
  
    


		$.ajax({ 
		url: "http://localhost/real_estate_api/api/Real_estate_api/property_enquiry",
		type: "post",
		dataType: "json",
		data: {'property_id':property_id,'property_name':property_name,'name':name,'email':email,'mobile':mobile,'msg':message} ,
				
		success: function (response) { 
					
  
		$("#name").val('');
		$("#email").val('');
		$("#mobile").val('');
		$("#msg").val('');
		},
			error: function(jqXHR, textStatus, errorThrown) {
			console.log(textStatus, errorThrown);
		}
		});    
	

}
</script>
	
