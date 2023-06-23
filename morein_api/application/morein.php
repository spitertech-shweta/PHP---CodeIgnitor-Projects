<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bslthemes.com/ryan/demo/index-new-demo-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jan 2021 04:45:49 GMT -->
<head>
	
	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<title>MOREIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	
	<!--
		Load Fonts
	-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!--
		Load CSS
	-->
	<link rel="stylesheet" href="<?php echo base_url().'assets_frontend/'?>css/basic.css" />
	<link rel="stylesheet" href="<?php echo base_url().'assets_frontend/'?>css/layout.css" />
	<link rel="stylesheet" href="<?php echo base_url().'assets_frontend/'?>css/blogs.css" />
	<link rel="stylesheet" href="<?php echo base_url().'assets_frontend/'?>css/ionicons.css" />
	<link rel="stylesheet" href="<?php echo base_url().'assets_frontend/'?>css/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo base_url().'assets_frontend/'?>css/animate.css" />
	<link rel="stylesheet" href="<?php echo base_url().'assets_frontend/'?>css/owl.carousel.css" />

	<!--
		Background Gradient
	-->
	<link rel="stylesheet" href="<?php echo base_url().'assets_frontend/'?>css/gradient.css" />
	
	<!--
		Template New-Skin
	-->
	<link rel="stylesheet" href="<?php echo base_url().'assets_frontend/'?>css/new-skin/new-skin.css" />

	<!--
		Template RTL
	-->
	<!--<link rel="stylesheet" href="css/rtl.css" />-->
	
	<!--
		Template Colors
	-->
	<link rel="stylesheet" href="<?php echo base_url().'assets_frontend/'?>css/demos/demo-1-colors.css" />
	<!--<link rel="stylesheet" href="css/template-colors/blue.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/orange.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/pink.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/purple.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/red.css" />-->

	<!--
		Template Dark
	-->
	<!--<link rel="stylesheet" href="css/template-dark/dark.css" />-->
	

	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!--
		Favicons
	-->
	<link rel="shortcut icon" href="<?php echo base_url().'assets_frontend/'?>images/favicons/favicon.ico">
	<style>
	.video-fluid {
	width: 100%;
	height: auto;
	}
</style>	

</head>

<body>
	<div class="page new-skin">
		
		<!-- preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- background -->
		<div class="background gradient">
			<ul class="bg-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
		</div>

		<!--
			Container
		-->
		<div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">

			<!--
				Header
			-->
			<header class="header">

				<!-- header profile -->
				<div class="profile">
					<div class="title"><?php echo $users->user_fname; echo " "; echo $users->user_lname;  ?></div>
					<div class="subtitle subtitle-typed">
						<div class="typing-title">
						<?php foreach($user_designation as $user_designation_listing)  { ?>
							<p><?php echo $user_designation_listing->user_designation;  ?></p>
                        <?php } ?> 
						</div>
					</div>
				</div>

				<!-- menu -->
				<div class="top-menu">
					<ul>
						<li class="active">
							<a href="#about-card">
								<span class="icon ion-person"></span>
								<span class="link">About</span>
							</a>
						</li>
						<li>
							<a href="#service-card">
								<span class="icon ion-android-list"></span>
								<span class="link">Service</span>
							</a>
						</li>
						<li>
							<a href="#works-card">
								<span class="icon ion-paintbrush"></span>
								<span class="link">Works</span>
							</a>
						</li>
						<li>
							<a href="#clients-card">
								<span class="icon ion-person-stalker"></span>
								<span class="link">Clients</span>
							</a>
						</li>
						<li>
							<a href="#blog-card">
								<span class="icon ion-chatbox-working"></span>
								<span class="link">Blog</span>
							</a>
						</li>
						<li>
							<a href="#contacts-card">
								<span class="icon ion-at"></span>
								<span class="link">Contact</span>
							</a>
						</li>
					</ul>
				</div>

			</header>

			<!--
				Card - Started
			-->
			<div class="card-started" id="home-card">

				<!--
					Profile
				-->
				<div class="profile no-photo">

					<!-- profile image -->
					<!--<div class="slide" style="background-image: url(images/man5_big.jpg);"></div>-->
                    <div class="slide"><img src="http://localhost/morein/<?php echo $users->user_img; ?>" class="img-responsive"  width="50%" height="100%"  alt="user image" id = "user_img" style = "padding-top:50px;"></div>
					<!-- profile titles -->
					<div class="title"><?php echo $users->user_fname; echo " "; echo $users->user_lname;  ?></div>
					<!--<div class="subtitle">Web Designer</div>-->
					<div class="subtitle subtitle-typed">
						<div class="typing-title">
						<?php foreach($user_designation as $user_designation_listing)  { ?>
							<p><?php echo $user_designation_listing->user_designation;  ?></p>
                        <?php } ?>   
						</div>
					</div>

					<!-- profile socials -->
					
					<!-- profile socials -->
					<div class="social">
						<?php foreach($social_sharing as $social_sharing_links) {?>
						<a target="_blank" href="<?php echo $social_sharing_links->twitter; ?>"><span class="fa fa-twitter"></span></a>
						<a target="_blank" href="<?php echo $social_sharing_links->facebook; ?>"><span class="fa fa-facebook"></span></a>
						<a target="_blank" href="<?php echo $social_sharing_links->instagram; ?>"><span class="fa fa-instagram"></span></a>
						<a target="_blank" href="<?php echo $social_sharing_links->whatsapp; ?>"><span class="fa fa-whatsapp"></span></a>
						<a target="_blank" href="<?php echo $social_sharing_links->linked_in; ?>"><span class="fa fa-linkedin"></span></a>
						<?php } ?>
					</div>
					

				</div>

			</div>

			<!-- 
				Card - About
			-->
			<div class="card-inner animated active" id="about-card">
				<div class="card-wrap">

					<!-- 
						About 
					-->
					<div class="content about">

						<!-- title -->
						<div class="title">About Me</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="info-list">
									<ul>
										<li><strong>Designation </strong><span style ="margin-left: 25px;">
										<?php 
										foreach ($user_designation as $designation => $data) {
											$tmp[] = $data->user_designation;
										}
								        $designation = implode(', ',$tmp);
								
										echo  $designation;
										
										?></span> </li>
								
										<li><strong>Mobile No</strong><span style ="margin-left: 40px;"><?php echo $users->user_mobile; ?></span> </li>
										<li><strong>Email </strong><span style ="margin-left: 70px;"><?php echo $users->user_email; ?></span> </li>
										<li><strong>Address </strong><span style ="margin-left: 50px;"><?php echo $users->user_address; ?></span> </li>
										<li><strong>City </strong><span style ="margin-left: 80px;"><?php echo $users->user_city; ?></span> </li>
										<li><strong>State </strong><span style ="margin-left: 70px;"><?php echo $users->user_state; ?></span> </li>
										<li><strong>Country </strong><span style ="margin-left: 50px;"><?php echo $users->user_country; ?></span> </li>
										<li><strong>Working Time </strong><span style ="margin-left: 10px;"><?php echo $users->user_working_time; ?></span> </li>
									</ul>
								</div>
							</div>
							
						</div>
						<div class = "row">
						<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="text-box">
									<p>
										<?php echo $users->user_info; ?>
									</p>
								</div>
							</div>
							
							<div class="clear"></div>
						
						</div>

					</div>


					<!-- Quote -->
					<div class="content quote">

						<!-- title -->
						<div class="title">
							<span >Quote</span>
						</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="revs-item">
									<div class="text">
										<div>
											<?php echo $users->user_quote;?>
										</div>
									</div>
									<div class="user">
										<div class="img">
										<img src="http://localhost/morein/<?php echo $users->user_img; ?>"  alt="Shweta Jadhav" />
										</div>
										<div class="info">
											<div class="name"><?php echo $users->user_fname; echo " "; echo $users->user_lname; ?></div>
											<div class="company"></div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

			<!--
				Card - Service
			-->
			<div class="card-inner" id="service-card">
				<div class="card-wrap">

					<!--
						Services
					-->
					<div class="content services">

						<!-- title -->
						<div class="title">My Services</div>

						<!-- content -->
						<div class="row service-items border-line-v">
							<!-- service item -->
							<?php foreach($services as $services_listing) { ?>
							<div class="col col-d-6 col-t-6 col-m-12 border-line-h">
								<div class="service-item">
									<div class="img">
									<img src="http://localhost/morein/<?php echo $services_listing->service_img; ?>"  style="width: 150px; height: 130px; border-radius: 50%;" alt="Shweta Jadhav" />

									</div>
									<div class="name">
										<span><?php echo $services_listing->service_title; ?></span>
									</div>
									<div class="desc">
										<div>
											<p><?php echo $services_listing->service_desc; ?></p>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>

						<div class="clear"></div>
					</div>

					<!--
						Testimonials
					-->
					<div class="content testimonials">

						<!-- title -->
						<div class="title">Testimonials</div>
						
						<!-- content -->
						<div class="row testimonials-items">

							<!-- client item -->
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="revs-carousel default-revs">
									<div class="owl-carousel">
										<?php foreach($client_testimonials as $client_testimonials_listing) { ?>
										<div class="item">
											<div class="revs-item">
												<div class="text">
												<?php echo $client_testimonials_listing->client_quote;?>
												</div>
												<div class="user">
													<div class="img"><img src="http://localhost/morein/<?php echo $client_testimonials_listing->client_img; ?>"   alt="Client Image" /></div>
													<div class="info">
														<div class="name"><?php echo $client_testimonials_listing->client_name;?></div>
														<div class="company"><?php echo $client_testimonials_listing->client_designation;?></div>
													</div>
													<div class="clear"></div>
												</div>
											</div>
										</div>
										<?php } ?>
									
									</div>
								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>


			
		    <!--
				Card - Clients
			-->
			<div class="card-inner" id="clients-card">
				<div class="card-wrap">

					<!--
						Clients
					-->
					<div class="content clients">

						<!-- title -->
						<div class="title">Clients</div>

						<!-- content -->
						
						<div class="row client-items">
							
							<!-- client item -->
							<?php foreach($user_clients as $clients) {?>
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
									<a target="_blank" href="https://www.google.com/">
										<img src="http://localhost/morein/<?php echo $clients->client_img; ?>" alt="Shweta Jadhav" style="width: 100px; height: 150px;"/>
										<p><?php echo $clients->client_title; ?></p>
									</a>
									</div>
								</div>
							</div>
							<?php } ?>
							<div class="clear"></div>
						</div>	
					</div>
				</div>
			</div>

			<!--
				Card - Works
			-->
			<div class="card-inner" id="works-card">
				<div class="card-wrap">

					<!--
						Works
					-->
					<div class="content works">

						<!-- title -->
						<div class="title">Recent Works</div>

						<!-- filters -->
						<div class="filter-menu filter-button-group">
							<div class="f_btn active">
								<label><input type="radio" name="fl_radio" value="grid-item" />All</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="photo" />Image</label>
							</div>
							
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="video" />Video</label>
							</div>
						</div>

						<!-- content -->
						<div class="row grid-items border-line-v">

							<!-- work item photo -->
							<?php foreach($work_images as $images) { ?>
							<div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="http://localhost/morein/<?php echo $images->work_img?>" class="has-popup-image">
										<img src="http://localhost/morein/<?php echo $images->work_img?>">
											<span class="info">
												<span class="ion ion-image"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="http://localhost/morein/<?php echo $images->work_img?>" class="name has-popup-image"><?php echo $images->work_title?></a>
										<div class="category">Image</div>
									</div>
								</div>
							</div>
							<?php } ?>

							<!-- work item video -->
							<?php foreach($work_videos as $videos) { ?>
							<div class="col col-d-6 col-t-6 col-m-12 grid-item video border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="http://localhost/morein/<?php echo $videos->work_video; ?>" class="has-popup-video">
										<video class="video-fluid z-depth-1" autoplay loop controls muted>
											<source src="http://localhost/morein/<?php echo $videos->work_video; ?>" type="video/mp4" />
										</video>
											<span class="info">
												<span class="ion ion-videocamera"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="http://localhost/morein/<?php echo $videos->work_video; ?>" class="name has-popup-video"><?php echo $videos->work_title?></a>
										<div class="category">Video</div>
									</div>
								</div>
							</div>
							<?php } ?>

							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

			<!--
				Card - Blog
			-->
			<div class="card-inner blog" id="blog-card">
				<div class="card-wrap">

					<!-- Blog -->
					<div class="content blog">

						<!-- title -->
						<div class="title">
							<span >Blog</span>
						</div>

						<!-- content -- class="col col-d-6 col-t-6 col-m-12 grid-item design border-line-h">-->
						<div class="row border-line-v">
							<!-- blog item -->
							<?php foreach($blog as $key=>$blog_listing) {  ?>
							<div class="col col-d-6 col-t-6 col-m-12">
								<div class="box-item">
									<div class="image">
										<a href="#popup-2" class="has-popup-media">
											<img src="http://localhost/morein/<?php echo $blog_listing->blog_img?>" style="padding-left:10px; width: 200px;  height: 100px;" alt="" />
											<span class="info">
												<span class="ion ion-images"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#popup-2" class="name has-popup-media">
											<span class="date">Posted On : &nbsp;<?php echo $blog_listing->blog_date?></span>
										</a>
										<a href="#popup-2" class="name has-popup-media" class="name"><?php echo $blog_listing->blog_title?></a>
									</div>
								</div>
								<div id="popup-2" class="popup-box mfp-fade mfp-hide">
										<div class="content">
											<div class="image">
												<img src="http://localhost/morein/<?php echo $blog_listing->blog_img?>" style="width: 900px;  height: 500px;" alt="">
											</div>
											<div class="desc">
												<div class="post-box">
													<h1><?php echo $blog_listing->blog_title?></h1>						
													<div class="blog-content">
														<p>
														<?php echo $blog_listing->blog_desc; ?>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
							<?php } ?>
							<div class="clear"></div>
						</div>

						<div class="pager">
							<nav class="navigation pagination">
								<div class="nav-links">
									<span class="page-numbers current">1</span>
									<a class="page-numbers" href="#">2</a>
									<a class="next page-numbers" href="#">Next</a>
								</div>
							</nav>
						</div>

					</div>

				</div>
			</div>

			<!--
				Card - Contacts
			-->
			<div class="card-inner contacts" id="contacts-card">
				<div class="card-wrap">

					<!--
						Conacts Info
					-->
					<div class="content contacts">

						<!-- title -->
						<div class="title">Get in Touch</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="map" id="map">
									<iframe  src="<?php echo $users->user_map;?>" width="700" height="250"></iframe>
								</div>
								<div class="info-list">
									<ul>
										<li><strong>Address </strong><span style ="margin-left:10px;"><?php echo $users->user_address; ?></span> </li>
										<li><strong>Email </strong><span style ="margin-left: 10px;"><?php echo $users->user_email; ?></span> </li>
										<li><strong>Mobile</strong><span style ="margin-left: 20px;"><?php echo $users->user_mobile; ?></span></li>
										<li><strong>Designation</strong><span style ="margin-left: 20px;">
										<?php 
										foreach ($user_designation as $designation => $data1) {
											$tmp1[] = $data1->user_designation;
										}
								        $designation1 = implode(', ',$tmp1);
										echo  $designation1;
										?></span> </li> 
									</li>
									</ul>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>

					<!--
						Contact Form
					-->
					<div class="content contacts">

						<!-- title -->
						<div class="title">Contact Form</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="contact_form">
									<form id="cform" method="post">
										<div class="row">
											<div class="col col-d-6 col-t-6 col-m-12">
												<div class="group-val">
													<input type="text" id="name" name="name" placeholder="Full Name" />
													<div id="lblError_name" style="color: red;"></div>

												</div>
											</div>
											<div class="col col-d-6 col-t-6 col-m-12">
												<div class="group-val">
													<input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" maxlength="10" />
													<div id="lblError_mobile" style="color: red;"></div>
												</div>
											</div>
											<div class="col col-d-6 col-t-6 col-m-12">
												<div class="group-val">
													<input type="text" id="email" name="email" placeholder="Email Address" />
													<div id="lblError_email" style="color: red;"></div>
												</div>
											</div>
											<div class="col col-d-6 col-t-6 col-m-12">
												<div class="group-val">
													<input type="text" id="address" name="address" placeholder="Address" />
												</div>
											</div>
											<div class="col col-d-12 col-t-12 col-m-12">
												<div class="group-val">
													<textarea id="message" name="message" placeholder="Your Message"></textarea>
												</div>
											</div>
										</div>
										<div class="align-left">
											<a href="#" class="button">
											<button type="submit" class="btn btn-success"  name="Submit" onclick ="contact(event)" >Send Message</button>
												<span class="arrow"></span>
											</a>
										</div>
									</form>
									<div class="alert-success">
										<p>Thanks, your message is sent successfully.</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>
		</div>
	
	<!--
		jQuery Scripts
	-->
	<script src="<?php echo base_url().'assets_frontend/'?>js/jquery.min.js"></script>
	<script src="<?php echo base_url().'assets_frontend/'?>js/jquery.validate.js"></script>
	<script src="<?php echo base_url().'assets_frontend/'?>js/jquery.magnific-popup.js"></script>
	<script src="<?php echo base_url().'assets_frontend/'?>js/imagesloaded.pkgd.js"></script>
	<script src="<?php echo base_url().'assets_frontend/'?>js/isotope.pkgd.js"></script>
	<script src="<?php echo base_url().'assets_frontend/'?>js/jquery.slimscroll.js"></script>
	<script src="<?php echo base_url().'assets_frontend/'?>js/owl.carousel.js"></script>
	<script src="<?php echo base_url().'assets_frontend/'?>js/typed.js"></script>
	<script src="../../../use.fontawesome.com/8da76d029b.js"></script> 
	
	<!--
		Google map api
	-->
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script> -->
	
	<!--
		Main Scripts
	-->
	<script src="<?php echo base_url().'assets_frontend/'?>js/scripts.js"></script>

	<script>
	function contact(e)
	{     
      e.preventDefault();
      var name				=     $('#name').val();
      var email           	=     $('#email').val();
      var mobile        	=     $('#mobile').val();
      var message           =     $('#message').val();
      var address           =     $('#address').val();

	  
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var letters = /^[A-Za-z ]+$/;
    var number =/[2-9]{2}\d{8}/;
	var x = document.getElementById("lblError_name");
	var y = document.getElementById("lblError_mobile");
	var z = document.getElementById("lblError_email");

	if(name=='')
	{
      $('#name').focus();
	  $('#name').css('border-color', 'red');
      return false;
	}
	else if(!letters.test(name))
	{  
      document.getElementById("lblError_name").innerHTML = "Name field required only alphabet characters";
	  $('#name').css('border-color', 'red');
      document.getElementById("lblError_name").style.visibility = "visible";
      return false;
    }

	else if(email=='')
	{

		$('#email').focus();
		$('#name').css('border-color', '');
		x.style.display = "none";
    	return false;
    
	}
	else if (!filter.test(email))
	{
	  x.style.display = "none";
      document.getElementById("lblError_email").innerHTML = "Please Enter Valid Email Id";
      document.getElementById("lblError_email").style.visibility = "visible";
	  $('#email').css('border-color', 'red');
      return false;
	}
	else if(mobile =='')
    {
	  x.style.display = "none";
	  z.style.display = "none";
	  $('#email').css('border-color', '');
	  $('#name').css('border-color', '');
      $('#mobile').focus();
	  $('#mobile').css('border-color', 'red');
      return false;
    }
    else if(!number.test(mobile))
	{
		z.style.display = "none";
		x.style.display = "none";
		document.getElementById("lblError_mobile").innerHTML = "Mobile field required only 10 digit number";
		$('#mobile').css('border-color', 'red');
		$('#name').css('border-color', '');
        return false;
	}
	else if(message ==''){
		y.style.display = "none";
		z.style.display = "none";
		x.style.display = "none";
		$('#mobile').css('border-color', '');
		$('#message').css('border-color', 'red');
		return false;
	}
	else{
		$('#message').css('border-color', '');
		$('#name').css('border-color', '');
		$('#email').css('border-color', '');
		$('#message').css('border-color', '');

	}
	


		 $.ajax({ 
		 url: "http://localhost/morein_api/Morein_api/contact",
		 type: "post",
		 dataType: "json",
		 data: {'name':name, 'email':email, 'mobile':mobile ,'message':message,'address':address},
			
		success: function (response){ 
        $("#name").val('');
        $("#email").val('');
        $("#mobile").val('');
        $("#message").val('');
		$("#address").val('');
		},
		 	error: function(jqXHR, textStatus, errorThrown) {
		 	console.log(textStatus, errorThrown);
		}
		});    

}
</script>

	
</body>

<!-- Mirrored from bslthemes.com/ryan/demo/index-new-demo-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jan 2021 04:46:10 GMT -->
</html>


