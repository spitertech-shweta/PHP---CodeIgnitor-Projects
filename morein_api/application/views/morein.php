<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bslthemes.com/ryan/demo/index-new-demo-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jan 2021 04:45:49 GMT -->
<head>
	
	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<title><?php if($users->user_fname == '' && $users->user_lname== '' ) {} else { echo $users->user_fname ." ".$users->user_lname;  } ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="<?php if($users->user_info =='') {} else { echo $users->user_info; }?>" />
	<?php 
			if(empty($user_designation)) { echo " ";} else{
			foreach ($user_designation as $designation3 => $data) {
				$tmp3[] = $data->user_designation;
			}
		    $designation3 = implode(', ',$tmp3);
			
	?>
	<meta name="keywords" content="<?php echo  $designation3; ?>" /> 
	<?php } ?>
	<meta name="author" content="<?php  if($users->user_fname && $users->user_lname =='') {} else { echo $users->user_fname ." ".$users->user_lname; } ?>" />
	
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
	<!-- <link rel="stylesheet" href="<?php // echo base_url().'assets_frontend/'?>css/owl.carousel.css" /> -->

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



	<!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
	<!--<link href="customer-quote-slider.css" rel="stylesheet">-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">


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
					<div class="title"><?php echo $users->user_fname ." ".$users->user_lname;  ?></div>
					<div class="subtitle subtitle-typed">
						<div class="typing-title">
						<?php 
						if(empty($user_designation))
						{
							echo " ";
						}
						else
						{
						foreach($user_designation as $user_designation_listing)  { ?>
							<p><?php echo $user_designation_listing->user_designation;  ?></p>
						<?php } 
						}
						?> 
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
                    <div class="slide"><?php if($users->user_img == '' && $users->user_gender == 'Male') {?> <img src="http://localhost/morein_api/assets_frontend/images/boy.jpg" class="img-responsive"  width="50%" height="100%"  alt=" " id = "user_img" style = "padding-top:50px;" /><?php  }  else if($users->user_img == '' && $users->user_gender == 'Female') {?> <img src="http://localhost/morein_api/assets_frontend/images/girl.jpg" class="img-responsive"  width="50%" height="100%"  alt=" " id = "user_img" style = "padding-top:50px;" /><?php  }    else{ ?><img src="http://localhost/morein/<?php echo $users->user_img; ?>" class="img-responsive"  width="50%" height="100%"  alt=" " id = "user_img" style = "padding-top:50px;" /> <?php  }?> </div>
					<!-- profile titles -->
					<div class="title"><?php echo $users->user_fname; echo " "; echo $users->user_lname;  ?></div>
					<!--<div class="subtitle">Web Designer</div>-->
					<div class="subtitle subtitle-typed">
						<div class="typing-title">
						<?php
						if(empty($user_designation)) { echo " ";}  else {
						 	foreach($user_designation as $user_designation_listing)  { ?>
							<p><?php echo $user_designation_listing->user_designation;  ?></p>
                        <?php } } ?>   
						</div>
					</div>

					<!-- profile socials -->
					<div class="social">
						<?php if(!empty($social_sharing)){ ?>
						<a target="_blank" href="<?php if($social_sharing->twitter == '') {echo "#";} else { echo $social_sharing->twitter; } ?>"><span class="fa fa-twitter"></span></a>
						<a target="_blank" href="<?php if($social_sharing->facebook == '') {echo "#";} else {echo $social_sharing->facebook; }?>"><span class="fa fa-facebook"></span></a>
						<a target="_blank" href="<?php if($social_sharing->instagram == '') {echo "#";} else { echo $social_sharing->instagram; }?>"><span class="fa fa-instagram"></span></a>
						<a target="_blank" href="<?php if($social_sharing->whatsapp == '') {echo "#";} else {echo $social_sharing->whatsapp; } ?>"><span class="fa fa-whatsapp"></span></a>
						<a target="_blank" href="<?php if($social_sharing->linked_in == '') {echo "#";} else { echo $social_sharing->linked_in; }?>"><span class="fa fa-linkedin"></span></a>
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
										if(empty($user_designation)) { echo " ";} else{
										foreach ($user_designation as $designation2 => $data2) {
											$tmp2[] = $data2->user_designation;
										}
								        $designation2 = implode(', ',$tmp2);
								
										echo  $designation2;
										
									}?></span> </li>
									
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
							<div class="title"><h3>Introduction</h3></div>
								<div class="text-box">
									<p>
										<?php echo $users->user_info; ?>
									</p>
								</div>
							</div>
							
							<div class="clear"></div>
						
						</div>

					</div>

					<?php if($users->user_quote == '') {
						
						echo " "; }
					     else {
					?>

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
											
										<img src="http://localhost/morein/<?php if($users->user_img=='') echo " "; else { echo $users->user_img;}?>"  alt="" />
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
					<?php } ?>

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
							<?php 
							if(empty($services)) { ?><h2 style = "text-align:center;">No Services Found</h2> <?php }  else {
							
							foreach($services as $key1=>$services_listing) { ?>
							<div class="col col-d-6 col-t-6 col-m-12 border-line-h">
								<div class="service-item">
									<div class="image">
										<a href="#service_popup-<?php echo $key1; ?>" class="has-popup-media">
											<img src="http://localhost/morein/<?php echo $services_listing->service_img; ?>"  style="width: 150px; height: 130px; border-radius: 50%;" alt="Shweta Jadhav" />
										</a>
									</div>
									<div class="name">
									<a href="#service_popup-<?php echo $key1; ?>" class="name has-popup-media">
										<span><?php echo $services_listing->service_title; ?></span>
									</a>
									</div>
									<div class="desc">
										<div>
											<p> </p>
										</div>
									</div>
								</div>
								<div id="service_popup-<?php echo $key1; ?>" class="popup-box mfp-fade mfp-hide">
									<div class="content">
										<div style = "margin-top:10%; margin-bottom:10%; margin-right:10%; margin-left:20%;">
											<img src="http://localhost/morein/<?php echo $services_listing->service_img;?>" alt=""  style = "width : 90%; height:60%;" />
										</div>
										<div class="desc">
											<div class="post-box">
												<h1 style ="text-align:center"><?php echo $services_listing->service_title?></h1>						
												<div class="blog-content">
													<p style ="text-align:center">
													<?php echo $services_listing->service_desc; ?>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							 </div>
							 <?php } } ?>
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
							<div class="patient-quote flexslider">
								<ul class="slides"> 
								<?php if(!empty($client_testimonials)) {
								 foreach($client_testimonials as $client_testimonials_listing) { ?>

									<li>
									<div class="row">
										<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
										<div class="item">
											<div class="revs-item">
												<div class="text">
												<?php echo $client_testimonials_listing->client_quote;?>												</div>
												<div class="user">
												<div class="img"><img id = "img" src="http://localhost/morein/<?php echo $client_testimonials_listing->client_img; ?>"   alt="Client Image" /></div>
													<div class="info">
													<div class="name"><?php echo $client_testimonials_listing->client_name;?></div>
													<div class="company"><?php echo $client_testimonials_listing->client_designation;?></div>
													</div>
													<div class="clear"></div>
												</div>
											</div>
										</div>
									</div>
									</li>
									<?php } } else { ?> <h2 style= "text-align:center;">No Testimonial Found</h2>         <?php }?>
								</ul>
							
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
							<?php 
							if(empty($user_clients)) { ?><h2 style = "text-align:center;">No Clients Found</h2> <?php }  else {

							foreach($user_clients as $clients) {?>
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v" >
								<div class="client-item" >
									<div class="image">
										<a target="_blank" href="https://www.google.com/">
											<img id = "img" src="http://localhost/morein/<?php echo $clients->client_img; ?>" alt="Shweta Jadhav"/>
											<p><?php echo $clients->client_title; ?></p>
										</a>
									</div>
								</div>
							</div>
							<?php } }?>
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
							<?php if(!empty($work)) {
							foreach($work as $key2=>$img_video)
							{ ?>
							
							<!-- work item photo -->
							<?php if($img_video->work_img == ''){ }   else { ?>
							<div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="http://localhost/morein/<?php echo $img_video->work_img?>" class="has-popup-image">
										<img  src="http://localhost/morein/<?php echo $img_video->work_img?>" style="padding-left:10px; width: 200px;  height: 200px;">
											<span class="info">
												<span class="ion ion-image"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="http://localhost/morein/<?php echo $img_video->work_img?>" class="name has-popup-image"><?php echo $img_video->work_title?></a>
										<div class="category">Image</div>
									</div>
								</div>
							</div>
							<?php } ?>
						


							<!-- work item video -->
							<?php if($img_video->work_video){ ?>
							<div class="col col-d-6 col-t-6 col-m-12 grid-item video border-line-h">
								<div class="box-item">
									<div class="image">	
										<a href="#work_video_popup-<?php echo $key2; ?>" class="has-popup-media">
											<video class="video-fluid z-depth-1" autoplay loop controls muted>
												<source src="http://localhost/morein/<?php echo $img_video->work_video; ?>" type="video/mp4" />
											</video>
											<span class="info">
												<span class="ion ion-videocamera"></span>
											</span>
										</a>
									</div>
									<div class="desc">
									<a href="#work_video_popup-<?php echo $key2; ?>" class="has-popup-media"><?php echo $img_video->work_title;?></a>
										<div class="category">Video</div>
									</div>
								</div>
							</div>
							<div id="work_video_popup-<?php echo $key2; ?>" class="popup-box mfp-fade mfp-hide">
									<div class="content">
											<div style = "margin-top:10%; margin-bottom:10%; margin-right:10%; margin-left:20%;">
												<video class="video-fluid z-depth-1" autoplay loop controls muted >
													<source src="http://localhost/morein/<?php echo $img_video->work_video; ?>" type="video/mp4" />
												</video>
											</div>
										<div class="desc">
											<div class="post-box">
												<h1 style = "text-align:center;"><?php echo $img_video->work_title;?></h1>						
												<div class="blog-content">
													<p> </p>
												</div>
											</div>
										</div>
									</div>
								</div>

							<?php } ?>

							<div class="clear"></div>
							<?php } } else { ?>  <h3 style ="margin-left:70px;">No Recent Work Found</h3>  <?php } ?>
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

						<!-- content --->
						<div class="row border-line-v">
							<!-- blog item -->
							<?php if(!empty($blog)) {  
							 foreach($blog as $key=>$blog_listing) {  ?>
							<div class="col col-d-6 col-t-6 col-m-12">
								<div class="box-item">
									<div class="image">
										<a href="#blog_popup-<?php echo $key; ?>" class="has-popup-media">
											<img src="http://localhost/morein/<?php echo $blog_listing->blog_img?>"  alt="" />
											<span class="info">
												<span class="ion ion-images"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#blog_popup-<?php echo $key; ?>" class="name has-popup-media">
											<span class="date">Posted On : &nbsp;<?php echo $blog_listing->blog_date?></span>
										</a>
										<a href="#blog_popup-<?php echo $key; ?>" class="name has-popup-media"><?php echo $blog_listing->blog_title?></a>
									</div>
								</div>
							 </div>
								<div id="blog_popup-<?php echo $key; ?>" class="popup-box mfp-fade mfp-hide">
									<div class="content">
										<div style = "margin-top:10%; margin-bottom:10%; margin-right:10%; margin-left:20%;">
											<img src="http://localhost/morein/<?php echo $blog_listing->blog_img?>"  alt="" style = "width : 90%; height:30%;" />
										</div>
										<div class="desc">
											<div class="post-box">
												<h1 style = "text-align:center;"><?php echo $blog_listing->blog_title?></h1>						
												<div class="blog-content">
													<p style = "text-align:center;">
														<?php echo $blog_listing->blog_desc; ?>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							
							<?php } }  else {?> <h2> No Blog Found<br><br></h2> <?php }?>

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
								<?php if($users->user_map) { ?>
								<div class="map" id="map">
									<iframe id= "frame_map" src="<?php echo $users->user_map;?>" width="700" height="250"></iframe> 
								</div>
								<?php } else { } ?>
								
								<div class="info-list">
									<ul>
										<li><strong>Address </strong><span style ="margin-left:10px;"><?php echo $users->user_address; ?></span> </li>
										<li><strong>Email </strong><span style ="margin-left: 10px;"><?php echo $users->user_email; ?></span> </li>
										<li><strong>Mobile</strong><span style ="margin-left: 20px;"><?php echo $users->user_mobile; ?></span></li>
										<li><strong>Designation</strong><span style ="margin-left: 20px;">
										<?php 
										if(empty($user_designation)) { echo " ";}  else {
										foreach ($user_designation as $designation1 => $data1) {
											$tmp1[] = $data1->user_designation;
										}
								        $designation1 = implode(', ',$tmp1);
										echo  $designation1;
									} ?></span> </li> 
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
													<input type="text" id="name" name="name" placeholder="Full Name *" />
													<div id="lblError_name" style="color: red;"></div>

												</div>
											</div>
											<div class="col col-d-6 col-t-6 col-m-12">
												<div class="group-val">
													<input type="text" id="mobile" name="mobile" placeholder="Mobile Number*" maxlength="10" />
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
													<textarea id="message" name="message" placeholder="Your Message *"></textarea>
												</div>
											</div>
										</div>
										<div class="align-left">
											<a href="#" class="button">
											<button type="submit" class="btn btn-success"  name="Submit" onclick ="contact(event)" >Send Message</button>
											<div id="message_sent" style="color: red;"></div>
											</a>
										</div>
									</form>
									<div class="alert-success">
										
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
	<!-- <script src="<?php //echo base_url().'assets_frontend/'?>js/owl.carousel.js"></script> -->
	<script src="<?php echo base_url().'assets_frontend/'?>js/typed.js"></script>
	<!--<script src="../../../use.fontawesome.com/8da76d029b.js"></script> -->


	<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider-min.js"></script>
	<!--<script src="customer-quote-slider.js"></script> -->


	
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
	var name_error = document.getElementById("lblError_name");
	var mobile_error = document.getElementById("lblError_mobile");
	var email_error = document.getElementById("lblError_email");

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
		name_error.style.display = "none";
    	return false;
    
	}
	else if (!filter.test(email))
	{
	  name_error.style.display = "none";
      document.getElementById("lblError_email").innerHTML = "Please Enter Valid Email Id";
      document.getElementById("lblError_email").style.visibility = "visible";
	  $('#email').css('border-color', 'red');
      return false;
	}
	else if(mobile =='')
    {
	  name_error.style.display = "none";
	  email_error.style.display = "none";
	  $('#email').css('border-color', '');
	  $('#name').css('border-color', '');
      $('#mobile').focus();
	  $('#mobile').css('border-color', 'red');
      return false;
    }
    else if(!number.test(mobile))
	{
		email_error.style.display = "none";
		name_error.style.display = "none";
		document.getElementById("lblError_mobile").innerHTML = "Mobile field required only 10 digit number";
		$('#mobile').css('border-color', 'red');
		$('#name').css('border-color', '');
        return false;
	}
	else if(message ==''){
		mobile_error.style.display = "none";
		email_error.style.display = "none";
		name_error.style.display = "none";
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

		if(response)
		{
		document.getElementById("message_sent").innerHTML = "Message sent successfully";
		}
		else{
			var message_sent = document.getElementById("message_sent");
			message_sent.style.display = "none";

		}

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




<script>
	$(document).ready(function() {
  $('.patient-quote').flexslider();    
});
</script>