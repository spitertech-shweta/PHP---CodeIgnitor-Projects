<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

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
                    <h2 class="title">Registration Info</h2>
                    <form method="POST" action="<?php echo base_url();?>admin/sign_up_insert_data">
                        <div class="row row-space">

							<div class="col-2">
								<div class="input-group">
									<input class="form-control" type="text" placeholder="Full Name" name="name">
								</div>
							</div>

                            <div class="col-2">
                                <div class="input-group">
                                    <input class="form-control" type="email" placeholder="Email" name="email">
                                   	<!--<i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>-->
                                </div>
                            </div>

							<div class="col-2">
                                <div class="input-group">
									<input type="password" name="password" id="password"  placeholder="Password">
								</div>
							</div>
							
							<div class="col-2">
								<div class="input-group">
									<label for="mobile"></label>
									<input type="tel"  id="mobile" name="mobile" placeholder="Mobile No.">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label for="admin_role">Admin Role</label>
									<select class="form-control" id="admin_role" name="admin_role">
										<option name="super_admin" value="1" selected>Super Admin </option>
										<option name="admin" value="2">Admin</option>
										<option name="manager" value="3">Manager</option>
									</select>
								</div>
							</div>



                            <!-- <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" class="form-control">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div> -->

				
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green"  class= "form-control" type="submit">Submit</button>
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
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
