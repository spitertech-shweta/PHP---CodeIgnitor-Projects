<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Morein Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets_login/css/login.css">
</head>
<body>
<?php 
    $currentURL = current_url();
    $params_email_id   = $_SERVER['QUERY_STRING'];
   
?>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?php echo base_url();?>assets_login/images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="<?php echo base_url();?>assets_login/images/logo.svg" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Forget Password  for <span style= "color:teal;"><?php echo $params_email_id ?></span></p>
              <form method ="POST" action="<?php echo base_url();?>admin/get_forget_password">
                 
                  <div class="form-group mb-4">
                     <input type="hidden" name="email_id" id="email_id"  value= "<?php echo $params_email_id ?>"class="form-control">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" maxlength ="10">
                    <div id="lblError_password" style="color: red;"></div> 
                 </div>
                  <div class="form-group mb-4">
                    <label for="re-enter password" class="sr-only">Re -enter Password</label>
                    <input type="password" name="re_enter_password" id="re_enter_password" class="form-control" placeholder="Re-enter Password" maxlength ="10">
                    <div id="lblError_re_enter_password" style="color: red;"></div> 
                  </div>
                  <div class="form-group mb-4">
                    <label for="otp" class="sr-only">OTP</label>
                    <input type="text" name="otp" id="otp" class="form-control" placeholder="Enter OTP">
                    <div id="lblError_otp" style="color: red;"></div> 
                  </div>

                <a href = "<?php echo base_url().'admin/forget_password_form'?>"><input name="forget_password" id="forget_password" class="btn btn-block login-btn mb-4" type="submit" value="SAVE" onclick = "forget_pwd(event)"></a>
                <p class="login-card-footer-text">Don't have an account? <a href="<?php echo base_url();?>admin/sign_up" class="text-reset">Register here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
                </form>
    
                </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>



<script>
function forget_pwd(e)
{
   e.preventDefault();
   
   var password             =       $('#password').val();
   var email_id             =       $('#email_id').val();
   var re_enter_password    =       $('#re_enter_password').val();
   var otp                  =       $('#otp').val();

   var regex_password = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,12}$/;
   
   var password_error = document.getElementById("lblError_password");
   var re_enter_password_error = document.getElementById("lblError_re_enter_password");
   var otp_error = document.getElementById("lblError_otp");
  

    if(password=='')
	  {
        $('input[name=password]').focus(); 
        document.getElementById("lblError_password").innerHTML = "Password Required"; 
        return false;
	  }

    if(!regex_password.test(password))
	  {  
      
      document.getElementById("lblError_password").innerHTML = "Password must contain UpperCase,LowerCase,Number and Special character ";
      document.getElementById("lblError_password").style.visibility = "visible";
      return false;
    }
   
      if(re_enter_password=='')
      {
         password_error.style.display = "none"; 
         $('input[name=re_enter_password]').focus(); 
         document.getElementById("lblError_re_enter_password").innerHTML = "re-enter password  Required"; 
         return false;
      }
    
      if(re_enter_password != password) 
      {
        $('input[name=re_enter_password]').focus(); 
        document.getElementById("lblError_re_enter_password").innerHTML = "Password not matched ";
        document.getElementById("lblError_re_enter_password").style.visibility = "visible";
        return false;
      }
      if(otp=='')
      {
        re_enter_password_error.style.display = "none"; 
        $('input[name=otp]').focus(); 
        document.getElementById("lblError_otp").innerHTML = "OTP required ";
        document.getElementById("lblError_otp").style.visibility = "visible";
        return false;
      }
      else
      {
        re_enter_password_error.style.display = "none"; 
      }
    
    

    $.ajax({ 
	  url: "<?php echo base_url()?>admin/Login_controller/get_forget_password",
	  type: "post",
	  dataType: "json",
	  data: {'password':password,'re_enter_password':re_enter_password,'email_id':email_id,'otp':otp} ,
			
	success: function (response) { 

    if(response.otp_wrong)
    {
        document.getElementById("lblError_otp").innerHTML = "Wrong OTP";
        return false;
    }
    else
    {
        otp_error.style.display = "none";
        window.location.replace("http://localhost/morein/admin/recovered_password_msg");
    }
       
	},
		error: function(jqXHR, textStatus, errorThrown) {
		console.log(textStatus, errorThrown);
	}
	});    
}



</script>