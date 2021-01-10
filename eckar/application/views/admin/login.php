<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Eckar Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets_login/css/login.css">
</head>
<body>
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
              <p class="login-card-description">Sign into your account</p>
              <form method ="POST" action="<?php echo base_url();?>admin/login">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>

									<h1><?php echo $error; ?> </h1>

                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                </form>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">Forget Password</button>
                <p class="login-card-footer-text">Don't have an account? <a href="<?php echo base_url();?>admin/sign_up" class="text-reset">Register here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
								</form>
        <!-- Modal -->
        <div id="uploadModal" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header"><p class="text-center"><b>Forget Password</b></p></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
              </div>
              <div class="modal-body">

                <form method = "POST" id = "add_icon" action="<?php echo base_url()?>admin/forget_password"  enctype='multipart/form-data'>
                <div class ="row">
                <div class ="col-md-3"></div>
                  
                  <div class="row" style="padding-top: 2%; padding-left: 10%; padding-right: 10%;">     
                          
                            <div class="col-md-9">
                                <div class="form-group">
                                <h3 style ="width:600px"><input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Id" required></h3>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                <h3 style ="width:600px"><input type="password" class="form-control" id="new_password" name="new_password" placeholder="Create new  password" required></h3>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="form-group">
                                <h3 style ="width:600px"><input type="password" class="form-control" id="re_enter_new_password" name="re_enter_new_password" placeholder="Re-enter new password" required></h3>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="form-group">		 
                                <input type="submit" class="btn btn-primary mr-2" id="forget_submit" value="submit">
                  
                                </div>
                              </div>
                        
                      </div>
                    </div>  
                  </div>                                                               
                </form>  
                <!-- Preview-->
                <div id='preview' style ></div>
                </div>


    
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
