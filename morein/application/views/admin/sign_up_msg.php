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
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
         
          <div class="col-md-12">
            <div class="card-body" style = "padding-right:100px; padding-left:100px; padding-top:150px;padding-bottom:150px;">
              <p class="login-card-description" style ="padding-left:10%;">User Name and Password has been sent to Your Registered Email Id</p>
              <a href="<?php echo base_url();?>admin/login"><span style ="padding-left:40%;"><button type= "button" class="btn btn-primary">LOGIN</button></span></a>
              <a href="<?php echo base_url();?>admin/sign_up"><span style ="padding-left:0%;"><button type= "button" class="btn btn-primary">Sign Up</button></span></a>

                <p class="login-card-footer-text" style="margin:150px;" ></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
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
