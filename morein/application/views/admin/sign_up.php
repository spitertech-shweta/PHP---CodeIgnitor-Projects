<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>MOREIN</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url();?>assets_sign_up/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets_sign_up/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>assets_sign_up/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets_sign_up/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>assets_sign_up/css/main.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="" id="myForm">
                        <div class="row row-space">

							<div class="col-2">
								<div class="input-group">
									<input class="form-control" type="text" placeholder="First Name *" id="user_fname" name="user_fname"  required>
                                    <div id="lblError_fname" style="color: red;"></div>  
                                </div>
							</div>

                            <div class="col-2">
								<div class="input-group">
									<input class="form-control" type="text" placeholder="Last Name *"  id ="user_lname" name="user_lname" required>
                                    <div id="lblError_lname" style="color: red;"></div>  
                                </div>
							</div>

                            <div class="col-2">
                                <div class="input-group">
                                    <input class="form-control" type="email" placeholder="Email *" id="user_email" name="user_email"  required >
                                    <div id="lblError_email" style="color: red;"></div> 
                                </div>   
                            </div>
                           
                            <div class="col-2">
								<div class="input-group">
									<label for="mobile"></label>
									<input class="form-control" type="text"  id="user_mobile" name="user_mobile" placeholder="Mobile No.*" required>
                                    <div id="lblError_mobile" style="color: red;"></div> 
                                </div>
							</div>

                            <div class="col-2">
                                <div class="input-group">
									<input class="form-control" type="password" name="password" id="password"  placeholder="Password *" maxlength = "12"  title="Password must contain at least 6 characters, including UPPER/lowercase ,special character and numbers."  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" >
                                    <div id="lblError_password" style="color: red;"></div>                                </div>  
							</div>

                            <div class="col-2">
                                <div class="input-group">
									<input class="form-control" type="password" name="confirm_password" id="confirm_password"  title="Please enter the same Password." placeholder="Confirm Password *" maxlength = "12" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">     
                                    <div id="lblError_confirm_password" style="color: red;"></div> 
                                </div>   
                        	</div>

                            <div class="col-2">
                                <div class="input-group">
                                    <input class="form-control" type="text" size="5"  placeholder="Address *" id ="user_address"  name="user_address">
                                    <div id="lblError_address" style="color: red;"></div> 
                                </div>
                            </div>

							
                             <div class="col-2">
                                <div class="input-group" >
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select id = "user_gender" name="user_gender" class="form-control" required>
                                            <option disabled="disabled" selected="selected">GENDER *</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <!--<option>Other</option> -->
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                    <div id="lblError_gender" style="color: red;"></div> 
                                </div>
                            </div> 

				
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green"  class= "form-control" type="submit" onclick = "sign_up(event)">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url();?>assets_sign_up/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url();?>assets_sign_up/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url();?>assets_sign_up/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets_sign_up/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url();?>assets_sign_up/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

<script>
function sign_up(e)
{
   e.preventDefault();
   var user_fname           =       $('#user_fname').val();
   var user_lname           =       $('#user_lname').val();
   var user_email           =       $('#user_email').val();
   var user_mobile          =       $('#user_mobile').val();
   var user_address         =       $('#user_address').val();
   var password             =       $('#password').val();
   var confirm_password     =       $('#confirm_password').val();
   var user_gender          =       $('#user_gender').val();

   var regex_password = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,12}$/;
   var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   var letters = /^[A-Za-z ]+$/;
   var number =/[2-9]{2}\d{8}/;

   var fname_error = document.getElementById("lblError_fname");
   var lname_error = document.getElementById("lblError_lname");
   var email_error = document.getElementById("lblError_email");
   var mobile_error = document.getElementById("lblError_mobile");
   var password_error = document.getElementById("lblError_password");
   var confirm_password_error = document.getElementById("lblError_confirm_password");
   var gender_error = document.getElementById("lblError_gender");
   var address_error = document.getElementById("lblError_address");

    if(user_fname=='')
	{
        $('input[name=user_fname]').focus();    
        document.getElementById("lblError_fname").innerHTML = "First Name Required"; 
        return false;
	}
	 if(!letters.test(user_fname))
	{  
      
      document.getElementById("lblError_fname").innerHTML = "Name field required only alphabet characters";
      document.getElementById("lblError_fname").style.visibility = "visible";
      return false;
    }
  
    if(user_lname=='')
	{
      $('input[name=user_lname]').focus();
      document.getElementById("lblError_lname").innerHTML = "Last Name Required"; 
      fname_error.style.display = "none"; 
      return false;
	}
	 if(!letters.test(user_lname))
	{  
      fname_error.style.display = "none";
      document.getElementById("lblError_lname").innerHTML = "Name field required only alphabet characters";
      document.getElementById("lblError_lname").style.visibility = "visible";
      return false;
    }
    
    if(user_email=='')
	{
        $('input[name=user_email]').focus(); 
        document.getElementById("lblError_email").innerHTML = "Email Required"; 
        fname_error.style.display = "none";
        lname_error.style.display = "none";
    	return false;
    
	}
	 if (!filter.test(user_email))
	{
      fname_error.style.display = "none";
      lname_error.style.display = "none";
      document.getElementById("lblError_email").innerHTML = "Please Enter Valid Email Id";
      document.getElementById("lblError_email").style.visibility = "visible";
      return false;
	}

   if(user_mobile =='')
    {
       
	    $('input[name=user_mobile]').focus(); 
        document.getElementById("lblError_mobile").innerHTML = "Mobile Required"; 
        fname_error.style.display = "none";
        lname_error.style.display = "none";
        email_error.style.display = "none";
    
      return false;
    }
    if(!number.test(user_mobile))
	{
        fname_error.style.display = "none";
        lname_error.style.display = "none";
        email_error.style.display = "none";
		document.getElementById("lblError_mobile").innerHTML = "Mobile field required only 10 digit number";
		document.getElementById("lblError_email").style.visibility = "visible";
        return false;
	}

    if(password=='')
	{
        $('input[name=password]').focus(); 
        document.getElementById("lblError_password").innerHTML = "Password Required"; 
        fname_error.style.display = "none";
        lname_error.style.display = "none";
        email_error.style.display = "none";
        mobile_error.style.display = "none";
        return false;
	}

    if(!regex_password.test(password))
	{  
        fname_error.style.display = "none";
        lname_error.style.display = "none";
        email_error.style.display = "none";
        mobile_error.style.display = "none";
      
      document.getElementById("lblError_password").innerHTML = "Password must contain UpperCase,LowerCase,Number and Special character ";
      document.getElementById("lblError_password").style.visibility = "visible";
      return false;
    }
   
     if(confirm_password=='')
    {
         $('input[name=confirm_password]').focus(); 
         document.getElementById("lblError_confirm_password").innerHTML = "Confirm Password Required"; 
         fname_error.style.display = "none";
        lname_error.style.display = "none";
        email_error.style.display = "none";
        password_error.style.display = "none";
        return false;
    }
    
    if(confirm_password != password) 
    {
        $('input[name=confirm_password]').focus(); 
        document.getElementById("lblError_confirm_password").innerHTML = "Password not matched ";
        document.getElementById("lblError_confirm_password").style.visibility = "visible";
        return false;
    }
    
     if(user_address=='')
     {
         fname_error.style.display = "none";
         lname_error.style.display = "none";
         email_error.style.display = "none";
         password_error.style.display = "none";
         confirm_password_error.style.display = "none";
         $('input[name=user_address]').focus(); 

        document.getElementById("lblError_user_address").innerHTML = "Address is Required ";
        document.getElementById("lblError_user_address").style.visibility = "visible";       
        
     }




     $('#user_gender').on('change', function () {
        if ($(this).val() =='') 
        {
            $('input[name=user_gender]').focus();
            address_error.style.display = "none";
            document.getElementById("lblError_user_gender").innerHTML = "Gender is Required ";
            document.getElementById("lblError_user_gender").style.visibility = "visible";          
        }
        else {
            gender_error.style.display = "none";
        }
    });

    
    


    $.ajax({ 
	url: "<?php echo base_url()?>admin/Login_controller/sign_up_insert_data",
	type: "post",
	dataType: "json",
	data: {'user_fname':user_fname,'user_lname':user_lname,'user_mobile':user_mobile,'user_address':user_address,'password':password,'confirm_password':confirm_password,'user_gender':user_gender,'user_email':user_email} ,
			
	success: function (response) { 
       
    if(response.email_exist)
    {
        document.getElementById("lblError_email").innerHTML = "Email Id Exists";
        return false;
    }
    else
    {
        email_error.style.display = "none";
        window.location.replace("http://localhost/morein/admin/sign_up_msg");
    }
        
     
	},
		error: function(jqXHR, textStatus, errorThrown) {
		console.log(textStatus, errorThrown);
	}
	});    
}



</script>