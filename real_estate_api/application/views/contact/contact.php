<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo  base_url();?>">Home</a> / Contact Us</span>
    <h2>Contact Us</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row contact">
<form role="form" method ="post" action = "" autocomplete= "on" >
  <div class="col-lg-6 col-sm-6 ">
                   
               <!-- <h6 style = "color:red;"><B><?php //echo $this->session->flashdata('error');?></B></h6> -->
                <input type="text" name = "name" id = "name" class="form-control" style="width:552px;"  placeholder="Full Name *">
                <div id="lblError_name" style="color: red;"></div>
               
                <input type="email" name = "email" id = "email" class="form-control" style="width:552px;" placeholder="Email Address" >
                <div id="lblError_email" style="color: red;"></div>
               
                <input type="tel" name = "phone_no" id = "phone_no" class="form-control" style="width:552px;" placeholder="Contact Number *"  maxlength="10">     
                <div id="lblError_phone_no" style="color: red;"></div>
               
                <textarea rows="6" name = "msg" id = "msg" class="form-control" style="width:552px;" placeholder="Message"></textarea>
               <button type="submit" class="btn btn-success" type= "submit" name="Submit" onclick ="contact(event)" >Send Message</button>
                             
  </div>
  </form>
  <div class="col-lg-6 col-sm-6 ">

  <div class="well"><div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Gurupushpa%20Apartment%20parijat%20nagar%20nashik+(SpiterTech%20Solutions)&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
  </div>
</div>
</div>
</div>


<script>
function contact(e)
{     
      e.preventDefault();
      var name            =     $('#name').val();
      var email           =     $('#email').val();
      var phone_no        =     $('#phone_no').val();
      var msg             =     $('#msg').val();

    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var letters = /^[A-Za-z ]+$/;
    var number =/[2-9]{2}\d{8}/;

    
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
			$('#email').focus();
      return false;
    
		}
		else if (!filter.test(email))
		{
      document.getElementById("lblError_name").style.visibility = "hidden";
      document.getElementById("lblError_email").innerHTML = "Please Enter Valid Email Id";
      document.getElementById("lblError_email").style.visibility = "visible";
      return false;
		}
    else if(phone_no =='')
    {
      document.getElementById("lblError_name").style.visibility = "hidden";
      document.getElementById("lblError_email").style.visibility = "hidden";
      $('#phone_no').focus();
      document.getElementById("lblError_phone_no").innerHTML = "Mobile field required";
      return false;
    }
    else if(!number.test(phone_no))
		{
			document.getElementById("lblError_email").style.visibility = "hidden";
      document.getElementById("lblError_name").style.visibility = "hidden";
			document.getElementById("lblError_phone_no").innerHTML = "Mobile field required only 10 digit number";
      return false;
		}
    else
    {
      document.getElementById("lblError_phone_no").style.visibility = "hidden";
      document.getElementById("lblError_email").style.visibility = "hidden";
      document.getElementById("lblError_name").style.visibility = "hidden";
    }
    



   
		 $.ajax({ 
		 url: "http://localhost/real_estate_api/api/Real_estate_api/insert_contact",
		 type: "post",
		 dataType: "json",
		 data: {'name':name, 'email':email, 'phone_no':phone_no ,'msg':msg} ,
			
		 success: function (response) { 
        $("#name").val('');
        $("#email").val('');
        $("#phone_no").val('');
        $("#msg").val('');
		 },
		 	error: function(jqXHR, textStatus, errorThrown) {
		 	console.log(textStatus, errorThrown);
		 }
		 });    
	

}
</script>
	
 