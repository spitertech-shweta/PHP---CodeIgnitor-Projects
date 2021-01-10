<!DOCTYPE html>

<html lang="zxx">

<!-- Mirrored from demo.epic-webdesign.com/tf-nova/v5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jan 2021 11:14:01 GMT -->
<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="">

    <meta name="description" content="">



    <title>ECKAR</title>

    

    <!-- Loading Bootstrap -->

    <link href="<?php echo base_url()?>assets_frontend/css/bootstrap.css" rel="stylesheet">



    <!-- Loading Template CSS -->

    <link href="<?php echo base_url()?>assets_frontend/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets_frontend/css/animate.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets_frontend/css/style-magnific-popup.css" rel="stylesheet">



    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Cabin:500,600,700" rel="stylesheet">



    <!-- Awsome Fonts -->

  <!-- <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?php echo base_url()?>assets_frontend/css/pe-icon-7-stroke.css">



	<!-- Optional - Adds useful class to manipulate icon font display -->

	<link rel="stylesheet" href="<?php echo base_url()?>assets_frontend/css/helper.css">



	<link rel="stylesheet" href="<?php echo base_url()?>assets_frontend/css/owl.carousel.min.css">

	<link rel="stylesheet" href="<?php echo base_url()?>assets_frontend/css/owl.theme.default.min.css">

	

    <!-- Font Favicon -->

    <link rel="shortcut icon" href="<?php echo base_url()?>assets_frontend/images/favicon.ico">

    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->

    <!--[if lt IE 9]>

      <script src="js/html5shiv.js"></script>

      <script src="js/respond.min.js"></script>

    <![endif]-->


    

    <!--headerIncludes-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!-- Bootstrap -->
<script type="text/javascript" src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js'></script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
<link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css' media="screen" /> 
<!-- Bootstrap -->


<style>
.carousel-control     		 { width:  4%; }
.carousel-control.left,.carousel-control.right {margin-left:15px;background-image:none;}
@media (max-width: 767px) {
	.carousel-inner .active.left { left: -100%; }
	.carousel-inner .next        { left:  100%; }
	.carousel-inner .prev		 { left: -100%; }
	.active > div { display:none; }
	.active > div:first-child { display:block; }

}
@media (min-width: 767px) and (max-width: 992px ) {
	.carousel-inner .active.left { left: -50%; }
	.carousel-inner .next        { left:  50%; }
	.carousel-inner .prev		 { left: -50%; }
	.active > div { display:none; }
	.active > div:first-child { display:block; }
	.active > div:first-child + div { display:block; }
}
@media (min-width: 992px ) {
	.carousel-inner .active.left { left: -16.7%; }
	.carousel-inner .next        { left:  16.7%; }
	.carousel-inner .prev		 { left: -16.7%; }	
}
</style>

<style type="text/css">
			.reqError{
				color: #ff0000; /*Red Color*/
				font-weight: bold;
            }
            
            .reqError1{
				color: #FFFFFF; /*white Color*/
				font-weight: bold;
            }
            .reqError2{
				color: #ff0000; /*white Color*/
				font-weight: bold;
			}
</style>

<style>
@import url(https://fonts.googleapis.com/css?family=Mr+Dafoe);
@import url(https://fonts.googleapis.com/css?family=Titillium+Web:900);
@import url(https://fonts.googleapis.com/css?family=Righteous);
@import url(https://fonts.googleapis.com/css?family=Candal);

@import url(https://fonts.googleapis.com/css?family=Permanent+Marker);

@import url(https://fonts.googleapis.com/css?family=Monoton);


body { background: #000; color: #fff; position: relative;}



.vectro {
  position: relative;
  -webkit-text-fill-color: teal;
  -webkit-text-stroke: 0.1px #f1f1f1;
  font-family: 'Righteous', cursive;
  font-size: 40px;
  margin-top:8px;
}

.vectro:after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  /*-webkit-animation:vectro_effect 0.067s infinite;*/
  background: repeating-linear-gradient(0deg, rgba(255,255,255,0.05) 0px, rgba(255,255,255,0.05) 1px, rgba(255,255,255,0) 1px, rgba(255,255,255,0) 2px);
}



.windows .vectro {
  -webkit-text-stroke: 4px #f1f1f1;
}

.vectro-body {
  -webkit-background-clip: text;
  background-image: -webkit-linear-gradient(#C3BFB4 0%, #FDFCFA 50%, #E8E7E5 51%, #757172 52%, #E8E9DB 100%);
  -webkit-filter: drop-shadow(2px 2px 15px #3F59F4);
}

.vectro-red {
  color: #F10C20;
  -webkit-text-fill-color: #F10C20;
  -webkit-text-stroke: 0;
  -webkit-filter: drop-shadow(2px 2px 15px #F10C20);
  font-style: italic;
  padding-right: 20px;
}

.windows .vectro-red {
  padding-right: 30px;
}

.vectro-green {
  color: #6BFF2B;
  -webkit-text-fill-color: #6BFF2B;
  -webkit-filter: drop-shadow(2px 2px 15px #6BFF2B);
  -webkit-text-stroke: 0;
  font-style: italic;
  padding-right: 20px;
  margin-left: -20px;
}

.windows .vectro-green {
  padding-right: 30px;
  margin-left: -30px;
}

.vectro-blue {
  color: #3F59F4;
  -webkit-text-fill-color: #3F59F4;
  -webkit-filter: drop-shadow(2px 2px 15px #3F59F4);
  -webkit-text-stroke: 0;
  font-style: italic;
  padding-right: 20px;
  margin-left: -20px;
}

.windows .vectro-blue {
  padding-right: 30px;
  margin-left: -30px;
}


@-webkit-keyframes chrome_effect {
  0% {background-position:-680px 0;}
  10% {background-position:420px 0;}
  100% {background-position:420px 0;}
}

@-webkit-keyframes cop_before_effect {
  0% {
    left: 51px;
    top: 74px;
    opacity: 0;}
  
  15% {
    left: 51px;
    top: 74px;
    opacity: 1;}
  
  30% {
    left: 51px;
    top: 74px;
    opacity: 0;}
  
  35% {
    left: 370px;
    top: 45px;
    opacity: 0;}
   
  50% {
    left: 370px;
    top: 45px;
    opacity: 1;}
  
  65% {
    left: 370px;
    top: 45px;
    opacity: 0;}
  
  70% {
    left: 564px;
    top: 74px;
    opacity: 0;}
   
  85% {
    left: 564px;
    top: 74px;
    opacity: 1;}
  
  100% {
    left: 564px;
    top: 74px;
    opacity: 0;}
}

@-webkit-keyframes cop_after_effect {
  0% {
    left: 90px;
    top: 32px;
    opacity: 0;}
  
  15% {
    left: 90px;
    top: 32px;
    opacity: 1;}
  
  30% {
    left: 90px;
    top: 32px;
    opacity: 0;}
  
  35% {
    left: 413px;
    top: 11px;
    opacity: 0;}
   
  50% {
    left: 413px;
    top: 11px;
    opacity: 1;}
  
  65% {
    left: 413px;
    top: 11px;
    opacity: 0;}
  
  70% {
    left: 603px;
    top: 32px;
    opacity: 0;}
   
  85% {
    left: 603px;
    top: 32px;
    opacity: 1;}
  
  100% {
    left: 603px;
    top: 32px;
    opacity: 0;}
}	
</style>






<script>
if ( navigator.platform.indexOf('Win') != -1 ) {
  window.document.getElementById("wrapper").setAttribute("class", "windows");
} else if ( navigator.platform.indexOf('Mac') != -1 ) {
  window.document.getElementById("wrapper").setAttribute("class", "mac");
}

</script>

<script>
$(document).ready(function(){
$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<4;i++) {
    next=next.next();
    if (!next.length) {
        next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});
});
</script>





</head>

<body>



    <!--begin header -->

    <header class="header">
     <!--begin nav -->

        <nav class="navbar navbar-default navbar-fixed-top" class ="navbar_custom">

            <!--begin container -->

            <div class="container">

                <!--begin navbar -->

                <div class="navbar-header">

                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button" >

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                </div>

                  
                <div id="navbar-collapse-02" class="collapse navbar-collapse">


                    <!--logo -->
                    <a href="<?php echo base_url();?>" class="navbar-brand" id="logo"><img src ="<?php echo base_url()?>eckar_images/logo-dark.png" style = "height:100px;  padding-bottom:50px; padding-right:90px; padding-left:150px;"></a>

                    <ul class="nav navbar-nav navbar-right">



                        <li><a href="#home_wrapper">Home</a></li>

                        <li><a href="#about">About</a></li>

                        <li><a href="#gallery">Gallery</a></li>

                        <li><a href="#features">Features</a></li>

                        <li><a href="#pricing">Pricing</a></li>

                        <li><a href="#blog">Blog</a></li>

                        <li><a href="#contact">Contact</a></li>

                        <li><a href="#download-app" class="external discover-btn">Get Started</a></li>     

                    </ul>

                </div>

                <!--end navbar -->

                                    

            </div>

    		<!--end container -->

            

        </nav>

    	<!--end nav -->

        

    </header>

    <!--end header -->



    <!--begin home section -->

    <section class="home-section" id="home_wrapper">



		<div class="home-section-overlay"></div>



		<!--begin container -->

		<div class="container">



	        <!--begin row -->

	        <div class="row">

	          

                <!--begin col-md-7-->

                <div class="col-md-7 padding-top-30">

				    <h6 class="vectro"><b>Top grocery and Ecommerce</b> </h6>
                    <h1 class="vectro">App Development</h1>
                    <h2 class="vectro"><b>company</b></h2>
                    
                    <p>See how Eckar can double your business in 12 months. Get more qualified leads &amp; close deals faster.</p>


                    <p>We have developed over 150+ mobile application for the leading business and startups.

                    Apps build 10 times a lot of sales than mobile websites. And in-app sales area unit growing 56% year-on-year*.</p>



                    <a href="#about" class="btn-green scrool">Explore Benefits</a>



                </div>

                <!--end col-md-7-->

           

				<!--begin col-md-5-->

	            <div class="col-md-5 wow bounceIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                        <!--begin form-->

                        <div>
                        <img src ="<?php echo base_url().$show_home->home_app_img;?>" style = "width:600px;heights:500px; ">
                             
                        </div>

                        <!--end form-->

	            </div>

	            <!--end col-md-5-->



	        </div>

	        <!--end row -->



		</div>

		<!--end container -->



    </section>

    <!--end home section -->



    <!--begin section-grey -->

    <section class="section-grey small-padding-top" id="about">



		<!--begin container -->

		<div class="container">



	        <!--begin row -->

	        <div class="row">



				<!--begin col-md-12 -->

				<div class="col-md-12 text-center">



					<h2 class="section-title"><b style ="color:teal;">Why your Shop Needs an eCommerce Website and Mobile Apps?</b></h2>



					<p class="section-subtitle">   </p>

					

				</div>

				<!--end col-md-12 -->



				<!--begin col-md-4 -->
                <?php foreach($show_about as $about_listing)  {?>
				<div class="col-md-6">


               
					<div class="main-services">

						<img src="<?php echo base_url().$about_listing->about_icon_img?>" class="width-100"  style ="width:120px; height:120px;"  alt="pic">

						<h3><?php echo $about_listing->about_icon_title?></h3>

						<p><?php echo $about_listing->about_icon_desc?></p>

						

                    </div>
                </div>
                <?php } ?>

				<!--end col-md-4 -->

	        </div>

	        <!--end row -->

			

		</div>

		<!--end container -->



    </section>

    <!--end section-grey -->



    <!--begin features -->

    <section class="section-white">



		<!--begin container -->

		<div class="container">



	        <!--begin row -->

	        <div class="row">



				<!--begin col-md-12 -->

				<div class="col-md-12 margin-bottom-40 text-center">



					<h2 class="section-title"><b style ="color:teal;">Amazing Features</b></h2>



					<p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

					

				</div>

				<!--end col-md-12 -->



				<!--begin col-md-4 -->

				<div class="col-md-4 padding-top-40">
					
            
                    <!--begin features_item -->

                    <div class="features_item">

                            

                        <div class="dropcaps_right">

                            <span class="fa fa-laptop features_icons"></span>

                        </div>

                        

                        <div class="text_align_right">

                            <h4 class= "text-info">Responsive Layout</h4>

                            <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>

                        </div>

                        

                    </div>

                    <!--end features_item -->

                    

                    <!--begin features_item -->

                    <div class="features_item">

                        

                        <div class="dropcaps_right">

                            <span class="fa fa-code features_icons"></span>

                        </div>

                        

                        <div class="text_align_right">

                            <h4 class= "text-info">Clean Code</h4>

                            <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>

                        </div>

                            

                    </div>

                    <!--end features_item -->

                    

                    <!--begin features_item -->

                    <div class="features_item">

                        

                        <div class="dropcaps_right">

                            <span class="fa fa-camera-retro features_icons"></span>

                        </div>

                        

                        <div class="text_align_right">

                            <h4 class= "text-info">Retina Ready</h4>

                            <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>

                        </div>

                                

                    </div>

                    <!--end features_item -->

                    

                </div>

                <!--end col-md-4 -->



				<!--begin col-md-4 -->

				<div class="col-md-4 wow slideInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                   
                	<img src="<?php echo base_url().$show_home->home_app_img;?>" alt="picture" class="width-100" style="height:700px;width:400px; padding-right:40px; padding-left:20px; padding-top:7px; padding-bottom:7px;">


				</div>

				<!--end col-md-4 -->



				<!--begin col-md-4 -->

				<div class="col-md-4 padding-top-40">

        

                    <!--begin features_item -->

                    <div class="features_item">

                            

                        <div class="dropcaps_left">

                            <span class="fa fa-leaf features_icons"></span>

                        </div>

                        

                        <div class="text_align_left">

                            <h4 class= "text-info">Modern Design</h4>

                            <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>

                        </div>

                                    

                    </div>

                    <!--end features_item -->

                    

                    <!--begin features_item -->

                    <div class="features_item">

                        

                        <div class="dropcaps_left">

                            <span class="fa fa-rocket features_icons"></span>

                        </div>

                        

                        <div class="text_align_left">

                            <h4 class= "text-info">Premium Features</h4>

                           <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>

                        </div>

                                    

                    </div>

                    <!--end features_item -->

                    

                    <!--begin features_item -->

                    <div class="features_item">

                        

                        <div class="dropcaps_left">

                            <span class="fa fa-comments features_icons"></span>

                        </div>

                        

                        <div class="text_align_left">

                            <h4 class= "text-info">24/7 Support</h4>

                            <p>Quis autem velis etis netsum etims quis voluptate velit nihil est netsum et quam donecs netis de etsum nisle lorem.</p>

                        </div>

                                    

                    </div>

                    <!--end features_item -->

                    

				</div>

				<!--end col-md-4 -->

	       

	        </div>

	        <!--end row -->

			

		</div>

		<!--end container -->



    </section>

    <!--end features -->





   
	<!--begin gallery section -->

  	<section class="section-lyla" id="gallery">



		<!--begin container -->

		<div class="container-fluid	">



			<!--begin row -->

			<div class="row">

				

				<!--begin col md 12 -->

				<div class="col-md-12 text-center">



					<h2 class="section-title white">Explore Latest Projects</h2>



					<p class="section-subtitle white">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

					

				</div>

				<!--end col md 12 -->



				<!--begin col md 12 -->

				<div class="gallery-item-wrapper padding-top-30">


               
					<!--begin owl carousel -->

					<div id="owl2" class="owl-carousel owl-theme">

                    <?php foreach($show_gallery as $gallery_img) {?>

						<div> 

							<img src="<?php echo base_url().$gallery_img->gallery_latest_app_image?>" alt="showcase" class="gallery-show" style= "width:400px; height:400px;">

						</div>	

                        <?php } ?>  
					</div>
                  
					<!--end owl carousel -->



					<div class="owl-dots">

						<div class="owl-dot active"><span></span></div>

						<div class="owl-dot"><span></span></div>

						<div class="owl-dot"><span></span></div>

					</div>
                  
				</div>

				<!--end col md  12-->



			</div>

			<!--end row -->



		</div>

		<!--end container -->



	</section>

	<!--end gallery section -->



	


  	<!--begin services section -->

  	<section class="section-white small-padding-bottom" id="features">



	    <!--begin container -->

	    <div class="container">



	      	<!--begin row -->

	      	<div class="row">



		        <!--begin col-md-12-->

		        <div class="col-md-12 text-center padding-bottom-10">



					<h2 class="section-title"><b style ="color:teal;">Amazing Features</b></h2>



					<p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>



		        </div>

		        <!--end col-md-12 -->



	        </div>

	        <!--end row -->



	      	<!--begin row -->

	      	<div class="row">



		        <!--begin col-md-4-->

		        <div class="col-md-4">



		        	<div class="feature-box light-green wow fadeIn" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">



		        		<i class="pe-7s-tools"></i>



		        		<div class="feature-box-text">



		        			<h4 class="text-info"><b>Support 24/7</b></h4>



		        			<p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>



		        		</div>



		        	</div>

		        </div>

		        <!--end col-md-4 -->



		        <!--begin col-md-4-->

		        <div class="col-md-4">



		        	<div class="feature-box light-blue wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">



		        		<i class="pe-7s-users"></i>



		        		<div class="feature-box-text">



		        			<h4 class="text-info"><b>User Friendly</b></h4>



		        			<p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>



		        		</div>



		        	</div>

		        </div>

		        <!--end col-md-4 -->



		        <!--begin col-md 4-->

		        <div class="col-md-4">



		        	<div class="feature-box orange wow fadeIn" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">



		        		<i class="pe-7s-bell"></i>



		        		<div class="feature-box-text">



		        			<h4 class="text-info"><b>Notifications</b></h4>



		        			<p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>



		        		</div>



		        	</div>

		        </div>

		        <!--end col-md-4 -->



	        </div>

	        <!--end row -->



	      	<!--begin row -->

	      	<div class="row">



		        <!--begin col-md-4-->

		        <div class="col-md-4">



		        	<div class="feature-box dark-green wow fadeIn" data-wow-delay="1s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">



		        		<i class="pe-7s-chat"></i>



		        		<div class="feature-box-text">



		        			<h4 class="text-info"><b>Chat With Friends</b></h4>



		        			<p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>



		        		</div>



		        	</div>

		        </div>

		        <!--end col-md-4 -->



		        <!--begin col-md-4-->

		        <div class="col-md-4">



		        	<div class="feature-box dark-blue wow fadeIn" data-wow-delay="1.25s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">



		        		<i class="pe-7s-world"></i>



		        		<div class="feature-box-text">



		        			<h4 class="text-info"><b>Accesibility</b></h4>



		        			<p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>



		        		</div>



		        	</div>

		        </div>

		        <!--end col-md-4 -->



		        <!--begin col-md-4-->

		        <div class="col-md-4">



		        	<div class="feature-box light-red wow fadeIn" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">



		        		<i class="pe-7s-piggy"></i>



		        		<div class="feature-box-text">



		        			<h4 class="text-info"><b>Cost Control</b></h4>



		        			<p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>



		        		</div>



		        	</div>

		        </div>

		        <!--end col-md-4 -->



	      	</div>

	      	<!--end row -->



	      	<!--begin row -->

	      	<div class="row">



		        <!--begin col-md-12-->

		        <div class="col-md-12 padding-top-40">



					<img src="<?php echo base_url()?>assets_frontend/images/iphone-v.png" alt="home-iphone" class="extra-image width-100 wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">



		        </div>

		        <!--end col-md-4 -->



	      	</div>

	      	<!--end row -->



	    </div>

	    <!--end container -->



  	</section>

  	<!--end services section -->





	<!--begin newsletter section -->

  	<section class="section-lyla-shape" id="newsletter-section">



	    <!--begin container -->

	    <div class="container">



	      	<!--begin row -->

	      	<div class="row">



		        <!--begin col-md-12 -->

		        <div class="col-md-12 text-center padding-top-60 padding-bottom-20">



		    		<h3 class="white-text">Seen enough? We are currently in the closed beta.<br>

		    		Please enter your email to join the waiting list.</h3>



		        </div>

		        <!--end col-md-12 -->



		        <!--begin col-md-12-->

		        <div class="col-md-12">



		            <!--begin newsletter_form_wrapper -->

                    <div class="newsletter_form_wrapper">

                        

                        <!--begin newsletter_form_box -->

                        <div class="newsletter_form_box">

                            

                            <!--begin success_box -->

                            <p class="newsletter_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>

                            <!--end success_box -->

                            

                            <!--begin newsletter-form -->

                            <form id="newsletter-form" class="newsletter_form" action="" method="post">



                                <input id="email_newsletter" type="email" name="email_newsletter" placeholder="Enter Your Email Address" onkeypress ="ValidateEmail_email_newsletter()">  
                                <button type="submit" onclick = "Subscription(event)" id="submit-button-newsletter">GET STARTED!</button>
                               <div class = "col-md-6">
                                <span id="lblError2" style="color: white; padding-left:30px;"></span>
                                <span id = "reqTxtMessage3" class="reqError1" style="color: white; "></span>
                                </div>
                              


                            </form>

                            <!--end newsletter-form -->

                        

                        </div>

                        <!--end newsletter_form_box -->

            

                    </div>

                    <!--end newsletter_form_wrapper -->



		        </div>

		        <!--end col-md-12 -->



	      	</div>

	      	<!--end row -->



	    </div>

	    <!--end container -->



  	</section>

  	<!--end newsletter section -->



	<!--begin pricing section -->

  	<section class="section-white bottom-shape z-100" id="pricing">



	    <!--begin container -->

	    <div class="container">



			<!--begin row -->

			<div class="row">



				<!--begin col-md-12 -->

				<div class="col-md-12 text-center padding-bottom-40">



					<h2 class="section-title"><b style ="color:teal;">Great Pricing Plans</b></h2>



					<p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

					

				</div>

				<!--end col-md-12 -->



					<!--begin col-md-4 -->
			<?php foreach($show_price as $price) {?>
            <div class="col-md-3 col-sm-4" style="padding-right:10px; padding-left:10px; ">

				<div class="price-box-white" style="padding-right:10px; padding-left:10px;">

					<ul class="pricing-list">

						<li class="price-title"><h3 class = "text-warning"><b><?php echo $price->pricing_title?></b></h3></li>

						<li class="price-value"><b class = "text-success"><?php echo $price->price?></b></li>

						<li class="price-subtitle"><b class ="text-warning">Per Month</b></li>

						<li class="price-text"><b class ="text-info"><?php echo $price->pricing_desc?></b></li>
						
						<li class="price-tag"><a href="#">GET STARTED</a></li>

					</ul>

				</div>

            </div>

<!--end col-md-4 -->
<?php } ?>

</div>

<!--end row -->


</div>
 <!--end container -->

</section>

<!--end pricing section -->



	<!--begin section-white -->

    <section class="section-white small-padding-top">

        

        <!--begin container-->

        <div class="container">



            <!--begin row-->

            <div class="row">

            

                <!--begin col-md-6-->

                <div class="col-md-6 wow slideInLeft" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
			
                    <img src="<?php echo base_url()?>eckar_images/home-cybersecurity-contact-bg-image.png" class="width-100" alt="pic" style= "width:500px;height:500px; padding-top:2px; padding-bottom:2px;">
		
                </div>

                <!--end col-sm-6-->

                

                <!--begin col-md-6-->

                <div class="col-md-6 padding-top-20">
					
					

                	<img src="<?php echo base_url()?>eckar_images/star.png" class="width-100" alt="pic" style= "width:200px;height:100px;float: center;">
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;by 150+ customers</p></h2>
                	

                </div>
				<div class="col-md-6 padding-top-20"></div>
                <!--end col-md-6-->
				
				<div class="col-md-6 padding-top-20">
				<table><tr>
				<th>
				 	<img src="<?php echo base_url()?>eckar_images/phone.jpg" class="width-100" alt="pic"  style= "width:80px; height:90px;float: center;">
				</th>
				<th>
				<h3 class ="text-primary"><b> &nbsp;&nbsp;<a href="tel:7030267771">7030267771</a></b></h3>
				</th>
				</tr>
				</table>
					<h3 class ="text-success"><b>&nbsp;&nbsp;&nbsp;<a href="tel:7030267771">Call us for free demo now</a></b></h3>
				</div>
				
				<div class="col-md-6 padding-top-20">
				<table><tr>
				<th>
				 	<img src="<?php echo base_url()?>eckar_images/email.jpg" class="width-100" alt="pic"  style= "width:80px; height:90px;float: center;">
				</th>
				<th>
				<h3 class ="text-primary"><b> &nbsp;&nbsp;<a href="mailto:info@eckar.com">info@eckar.com</a></b></h3>
				</th>
				</tr>
				</table>
					<h3  class ="text-success"><b>&nbsp;&nbsp;<a href="mailto:info@eckar.com">Say Hello</a></b></h3>
				</div>



            </div>

            <!--end row-->

    

        </div>

        <!--end container-->

    

    </section>

    <!--end section-white-->



  	


	<!--begin download-app-wrapper -->

	<section class="download-app-wrapper" id="download-app">



    	<div class="download-app-wrapper-overlay"></div>



    	<div class="shape-grey-image-top"></div>



		<!--begin container -->

		<div class="container">



	        <!--begin row -->

	        <div class="row">



	        	<!--begin col-md-5-->

                <div class="col-md-6 padding-top-100">



                	<h2 class="title-download-app-padding white-text">Get The App Now!</h2>



					<h2><b>Create your own app and gain a strong user base with Eckar</b></h2>
					<p><h3>We’re available for 8 hours a day!
                        to require a detailed analysis and assessment of your plan.</h3></p>


                	<a href="#" class="btn-download-app"><span class="fa fa-apple"></span><p><small>Download On</small><br>App Store</p></a>

                    

                	<a href="#" class="btn-download-app"><span class="fa fa-android"></span><p><small>Get It On</small><br>Google Play</p></a>

                    

                	<a href="#" class="btn-download-app last"><span class="fa fa-windows"></span><p><small>Get It From</small><br>Windows</p></a>
					<br><br>
                    
					<div class="border border-light p-3 mb-4">
        
						<div class="text-center">
							<button type="button" class="btn-green scrool" class="button btn-lg" data-toggle="modal" data-target="#form">GET FREE CONSULTATION</button>
						</div>
					
					</div>


				<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header border-bottom-0">
						<h5 class="modal-title" id="exampleModalLabel"><h5 class="text-info">FREE CONSULATATION</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
                    <form id="enquiry-form" class="contact" action="" method="post">

						<div class="modal-body">
                            <div class="form-group">
                            <label class="text-info" for="Name">Name</label><label style="color: red">*</label>
                                <input type="text" class= "contact-input" class="form-control" name = "enquiry_name" id="enquiry_name" aria-describedby="emailHelp" placeholder="Enter Full Name" onkeypress="return Validate1(event);">
                                <div id="lblError_enquiry_name" class="text-info" style="color: red"></div>
                                <div id="reqTxtName1" class="reqError2"></div>


                            </div>

                            <div class="form-group">
                                <label class="text-info" for="email">Email address</label>
                                <input class="contact-input" type="email" name = "enquiry_email" id="enquiry_email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" onkeypress="ValidateEmail1();">
                                <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
                                <div id="lblError_enquiry_email" style="color: red"></div>
                                <div id="reqTxtEmail1"  class="text-info" class="reqError2"></div>

                            </div>

                            <div class="form-group">
                                <label class="text-info" for="Mobile">Mobile</label><label style="color: red">*</label>
                                <input class="contact-input" required="required" id= "enquiry_mobile" name="enquiry_mobile" placeholder="Phone Number" type="text" onkeypress="return IsNumeric1(event);" ondrop="return false;" onpaste="return false;" maxlength="10">
                                <div id="error1" style="color: Red; display: none">* Input digits (0 - 9)</div>
                                <div id="reqTxtMobile1" class="reqError2"></div>
                            </div>

                            <div class="form-group">
                                <label class="text-info" for="enquiry_about">Your Enquiry About</label><label style="color: red">*</label>
                                <input class="contact-input"type="text" class="form-control" id="enquiry_about"  class="enquiry_about"placeholder="Enquiry About ">
                                <div id="reqTxtAbout" class="reqError2"></div>
                            </div>

                            <div class="form-group">
                                <label class="text-info" for="message">Message</label>
                                <textarea class ="text-info" class="contact-commnent" rows="2" cols="8" required="required" id= "enquiry_message"  name="enquiry_message" placeholder="Your Message..." ></textarea>
                            </div>

						</div>
						<div class="modal-footer border-top-0 d-flex justify-content-center">
						<button type="submit" class="btn btn-success"  id ="submit1" onclick="user_enquiry(event)">Submit</button>
						</div>
					</form>
					</div>
				</div>
                </div>
                

                </div>

                <!--end col-md-5-->

	       

	        	<!--begin col-md-7-->

                <div class="col-md-6 wow slideInRight" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: slideInRight;">

                    

                    <img src="<?php echo base_url().$show_home->home_app_img;?>" alt="picture" class="download-app-iphone width-100" style= "padding-top:100px;">

                    

                </div>

                <!--end col-md-7-->

	       

	        </div>

	        <!--end row -->



		</div>

		<!--end container -->



    </section>

    <!--end download-app-wrapper -->



    <!--begin section-white -->

    <section class="section-white small-paddings">



		<!--begin container -->

		<div class="container">



	        <!--begin row -->

	        <div class="row">

            

                <!--begin fun-facts-box-->

                <div class="col-sm-3 fun-facts-box">

                    

                    <div class="fun-facts-icon">

                        <i class="fa fa-trophy"></i>

                    </div>



                    <div class="fun-facts-text">



                        <h3 class="fun-facts-title">Trusted By 5K</h3>

                        <p class="fun-facts-subtitle">App Of The Year</p>



                    </div>



                </div>

                <!--end fun-facts-box -->



                <!--begin fun-facts-box-->

                <div class="col-sm-3 fun-facts-box">

                    

                    <div class="fun-facts-icon">

                        <i class="fa fa-download"></i>

                    </div>



                    <div class="fun-facts-text">



                        <h3 class="fun-facts-title">11500</h3>

                        <p class="fun-facts-subtitle">Total Downloads</p>



                    </div>



                </div>

                <!--end fun-facts-box -->



                <!--begin fun-facts-box-->

                <div class="col-sm-3 fun-facts-box">

                    

                    <div class="fun-facts-icon">

                        <i class="fa fa-heart"></i>

                    </div>



                    <div class="fun-facts-text">



                        <h3 class="fun-facts-title">5500</h3>

                        <p class="fun-facts-subtitle">Active Members</p>



                    </div>



                </div>

                <!--end fun-facts-box -->



                <!--begin fun-facts-box-->

                <div class="col-sm-3 fun-facts-box">

                    

                    <div class="fun-facts-icon">

                        <i class="fa fa-rocket"></i>

                    </div>



                    <div class="fun-facts-text">



                        <h3 class="fun-facts-title">1000+</h3>

                        <p class="fun-facts-subtitle">Diferent Premium Avatars</p>



                    </div>



                </div>

                <!--end fun-facts-box -->



            </div>

	        <!--end row -->

			

		</div>

		<!--end container -->



    </section>

    <!--end white-grey -->



 <!--begin blog -->
 <section class="section-grey" id="blog">

 <div class="container">



<!--begin row-->

<div class="row">



    <!--begin col-md-12-->

    <div class="col-md-10 col-md-offset-1 text-center">

        <h2 class="section-title"><b style="color:teal;">Our Latest News</b></h2>

        

        <div class="separator_wrapper">

            <i class="icon icon-star-two blue"></i>

        </div>



        <p class="section-subtitle">     </p>

    </div>

    <!--end col-md-12-->



</div>

<!--end row-->
<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
  <div class="carousel-inner">
  <div class="carousel-inner">
                <?php
                $item_class = ' active';
                foreach($show_blog as $blog_details) {
                ?>
    <div class="item<?php echo $item_class; ?>">
      <div class="col-md-2 col-sm-6 col-xs-12">
          <a href="#"><img src="<?php echo base_url().$blog_details->blog_img;?>" class="img-responsive" style= "width:800px; height:200px;"></a>
          <h3 class="blog-title"><a href="#"><?php echo $blog_details->blog_title;?></a></h3>
          <a href="#" class="blog-icons"><i class="fa fa-user"></i> Paul Smith</a>
          <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> WordPress</a>
          <p><?php echo $blog_details->blog_desc;?></p>
        
        </div>
        
        </div>
    <?php  
    $item_class = ''; 
    }
   ?>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
</div>



 <div>
 </section>

<!--end blog -->


  	<!--begin contact -->

    <section class="section-white no-padding-bottom" id="contact">

        

        <!--begin container-->

        <div class="container">

    

            <!--begin row-->

            <div class="row">

        

                <!--begin col-md-6 -->

				<div class="col-md-6">



					<h4>Get in touch</h4>



	                <!--begin success message -->

	                <p class="contact_success_box" id= "message" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>

	                <!--end success message -->

	                
	                 <!--begin contact form -->

					 <form id="contact-form" class="contact" action="" method="post">
					
                     <label class="text-info" for="Name" style = "padding-left:10px;">Name</label><label style ="color:red">*</label>
					 <input class="contact-input white-input" required="required" id= "contact_name" name="contact_name" placeholder="Full Name" type="text" onkeypress="return Validate(event);">
                     <div id="lblError_contact_name" style="color: red;"></div>
                     <div id="reqTxtName" class="reqError"></div>
                
					<label class="text-info" for="Email" style = "padding-left:10px;">Email</label>
					<input class="contact-input white-input" required="required" id= "contact_email" name="contact_email" placeholder="Email Adress" type="email" onkeypress="ValidateEmail();">
					<div id="lblError_contact_email" style="color: red"></div>
                    <div id="reqTxtEmail" class="reqError"></div>

                    <label class="text-info" for="Mobile" style = "padding-left:10px;">Mobile</label><label style ="color:red">*</label>
					<input class="contact-input white-input" required="required" id= "contact_mobile" name="contact_mobile" placeholder="Phone Number" type="text" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" maxlength="10">
					<div id="error" style="color: Red; display: none">* Input digits (0 - 9)</div>
                    <div id="reqTxtMobile" class="reqError"></div>

                    <label class="text-info" for="Message" style = "padding-left:10px;">Message</label><label style ="color:red">*</label>
					<textarea class="text-info" rows="2" required="required" id= "contact_message" cols="20" name="contact_message" placeholder="Your Message..."  onkeyup = "keyUP(event.keyCode)" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;"></textarea>
                    <div id="reqTxtMessage" class="reqError"></div>

					<input value="Send Message" id="submit" onclick="contact_enquiry(event)" class="contact-submit" type="submit">
					

					</form>

	                <!--end contact form -->

	            	

				</div>

				<!--end col-md-6 -->



                <!--begin col-md-6 -->

				<div class="col-md-6">



					<h4>How to find us</h4>



                    <iframe class="contact-maps" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Gurupushpa%20Apartment%20parijat%20nagar%20nashik+(SpiterTech%20Solutions)&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"" width="600" height="270" style="border:0" allowfullscreen></iframe>



					<h5>Head Office</h5>



                    <p class="contact-info"><i class="fa fa-map-o"></i> Gurupushpa Apartment,Parijat Nagar,Nashik</p>

                    

                    <p class="contact-info"><i class="fa fa-envelope-o"></i> <a href="mailto:info@eckar.com">info@eckar.com </a></p>

                    

                    <p class="contact-info"><i class="fa fa-phone"></i>7030267771</p>



				</div>

				<!--end col-md-6 -->



            </div>

            <!--end row-->

            

      </div>

      <!--end container-->

            

    </section>

    <!--end contact-->

    

    <!--begin footer -->

    <div class="footer">

            

        <!--begin container -->

        <div class="container">

        

            <!--begin row -->

            <div class="row">

            

                <!--begin col-md-12 -->

                <div class="col-md-12 text-center">

                   

                    <p>Copyright © 2021 Eckar</a></p>

                                         

                    <!--begin footer_social -->

                    <ul class="footer_social">



                        <li>

                            <a href="#">

                                <i class="fa fa-twitter"></i>

                            </a>

                        </li>



                        <li>

                            <a href="#">

                                <i class="fa fa-pinterest"></i>

                            </a>

                        </li>



                        <li>

                            <a href="#">

                                <i class="fa fa-facebook"></i>

                            </a>

                        </li>



                        <li>

                            <a href="#">

                                <i class="fa fa-instagram"></i>

                            </a>

                        </li>



                        <li>

                            <a href="#">

                                <i class="fa fa-skype"></i>

                            </a>

                        </li>



                        <li>

                            <a href="#">

                                <i class="fa fa-dribble"></i>

                            </a>

                        </li>



                    </ul>

                    <!--end footer_social -->

                    

                </div>

                <!--end col-md-6 -->

                

            </div>

            <!--end row -->

            

        </div>

        <!--end container -->

                

    </div>

    <!--end footer -->





<!-- Load JS here for greater good =============================-->

<script src="<?php echo base_url()?>assets_frontend/js/jquery-1.11.3.min.js"></script>

<script src="<?php echo base_url()?>assets_frontend/js/bootstrap.js"></script>

<script src="<?php echo base_url()?>assets_frontend/js/owl.carousel.min.js"></script>

<script src="<?php echo base_url()?>assets_frontend/js/jquery.scrollTo-min.js"></script>

<script src="<?php echo base_url()?>assets_frontend/js/jquery.magnific-popup.min.js"></script>

<script src="<?php echo base_url()?>assets_frontend/js/jquery.nav.js"></script>

<script src="<?php echo base_url()?>assets_frontend/js/wow.js"></script>

<script src="<?php echo base_url()?>assets_frontend/js/plugins.js"></script>

<script src="<?php echo base_url()?>assets_frontend/js/custom.js"></script>





</body>


<!-- Mirrored from demo.epic-webdesign.com/tf-nova/v5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jan 2021 11:14:01 GMT -->
</html>


<script>
function contact_enquiry(e)
{ 
	e.preventDefault();
   var contact_name = $('#contact_name').val();
   var contact_email =$('#contact_email').val();
   var contact_mobile =$('#contact_mobile').val();
   var contact_message =$('#contact_message').val();

if(contact_name ="")
{
    Validate(e);
}

if(contact_mobile = "")
{
    IsNumeric(e);

}

if(contact_email = "")
{
    ValidateEmail();	

}
else if(ValidateEmail()==false)
{
    return false;
}


	
			var contact_name = document.getElementById("contact_name").value;
			var contact_email = document.getElementById("contact_email").value;
			var contact_mobile = document.getElementById("contact_mobile").value;
			var contact_message =document.getElementById("contact_message").value;
				
            
              if(contact_name.trim()==""){

                    document.getElementById("reqTxtName").innerHTML="* Name is required.";      
                    return false;			
                     
                }
                else{
                    
                    document.getElementById("reqTxtName").innerHTML=" ";
                }

			 if(contact_email.trim()==""){

			 		document.getElementById("reqTxtEmail").innerHTML="mail  is required";
                     return false;
                 }	
                 else{
                    
                    document.getElementById("reqTxtEmail").innerHTML=" ";

                }
                
                
				
			//  if(contact_mobile.trim()==""){
			// 		document.getElementById("reqTxtMobile").innerHTML="* Mobile is required.";
            //         return false;
            //     }
            //     else{
                   
            //           document.getElementById("reqTxtMobile").innerHTML=" ";
  
            //       }	
             
              if(contact_message.trim()==""){
			 		document.getElementById("reqTxtMessage").innerHTML="* Message is required.";
                     return false;
                }
                 else{
                   
                      document.getElementById("reqTxtMessage").innerHTML=" ";
  
                   }	
             
            

  
		$.ajax({ 
		url: "<?php echo base_url()?>Home/contact_enquiry",
		type: "post",
		dataType: "json",
		data: {'contact_name':contact_name,'contact_email':contact_email,'contact_mobile':contact_mobile,'contact_message':contact_message} ,
				
		success: function (response) { 
		$("#contact_name").val('');
		$("#contact_email").val('');
		$("#contact_mobile").val('');
		$("#contact_message").val('');
		
		
		},
			error: function(jqXHR, textStatus, errorThrown) {
			console.log(textStatus, errorThrown);
		}
		});    
	
	
}
</script>


<script type="text/javascript">
    function Validate(e) {
        var keyCode = e.keyCode || e.which;
 
        var lblError = document.getElementById("lblError_contact_name");
        lblError.innerHTML = "";
 
        //Regex for Valid Characters i.e. Alphabets.
        var regex = /^[A-Za-z ]+$/;
 
        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            lblError.innerHTML = "Only Alphabets and spaces allowed.";
        }
 
        return isValid;
    }
</script>


<script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
	</script>
	
	<script type="text/javascript">
    function ValidateEmail() {
        var email = document.getElementById("contact_email").value;
        var lblError = document.getElementById("lblError_contact_email");
        lblError.innerHTML = "";
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (!expr.test(email)) {
            lblError.innerHTML = "Invalid email address.";
        }
    }
</script>
</script>


<!------------------------------------------------------------->



<script>
function user_enquiry(e)
{ 
    e.preventDefault();
    
   
   var enquiry_name         = $('#enquiry_name').val();
   var enquiry_email        =$('#enquiry_email').val();
   var enquiry_mobile       =$('#enquiry_mobile').val();
   var enquiry_message      =$('#enquiry_message').val();
   var enquiry_about        =$('#enquiry_about').val();

            if(enquiry_name ="")
            {
                Validate1(e);
            
            }

            if(enquiry_mobile = "")
            {
                IsNumeric1(e);
            }

            if(enquiry_email = "")
            {
                ValidateEmail1();

            }
            else if(ValidateEmail1()==false)
            {
                 return false;
            }

            var enquiry_about        = document.getElementById("enquiry_about").value;
			var enquiry_name        = document.getElementById("enquiry_name").value;
			var enquiry_email       = document.getElementById("enquiry_email").value;
			var enquiry_mobile      = document.getElementById("enquiry_mobile").value;
			var enquiry_message     =document.getElementById("enquiry_message").value;
				
				
				if(enquiry_name.trim()==""){
                    document.getElementById("reqTxtName1").innerHTML="* Name is required.";	
					return false;
                }
                else{
                    document.getElementById("reqTxtName1").innerHTML=" ";	
                }
                
                
				// if(enquiry_email.trim()==""){
                //     document.getElementById("reqTxtEmail1").innerHTML="* Email is required.";
				// 	return false;
                // }	
                // else{
                //     document.getElementById("reqTxtEmail1").innerHTML=" ";	
                // }

				
				if(enquiry_mobile.trim()==""){
                    document.getElementById("reqTxtMobile1").innerHTML="* Mobile is required.";
					return false;
                }	
                else{
                    document.getElementById("reqTxtMobile1").innerHTML=" ";	
                }
                

                if(enquiry_about.trim()==""){
                    document.getElementById("reqTxtAbout").innerHTML="* Enquiry about is required.";
					return false;
				}	
				else{
                    document.getElementById("reqTxtAbout").innerHTML=" ";
				}


                // if(enquiry_message.trim()==""){
                //     document.getElementById("reqTxtMessage1").innerHTML="* Message is required.";
				// 	return false;
				// }	
				// else{
                //     document.getElementById("reqTxtMessage1").innerHTML=" ";
				// }




		$.ajax({ 
		url: "<?php echo base_url()?>Home/user_enquiry",
		type: "post",
		dataType: "json",
		data: {'enquiry_name':enquiry_name,'enquiry_email':enquiry_email,'enquiry_mobile':enquiry_mobile,'enquiry_message':enquiry_message,'enquiry_about':enquiry_about},
        
		success: function (response) { 
            console.log(response);
		$("#enquiry_name").val('');
		$("#enquiry_email").val('');
		$("#enquiry_mobile").val('');
        $("#enquiry_message").val('');
        $("#enquiry_about").val('');
		
		
		},
			error: function(jqXHR, textStatus, errorThrown) {
			console.log(textStatus, errorThrown);
		}
		});    
	
	
}
</script>



<<script type="text/javascript">
    function ValidateEmail1() {
        var email = document.getElementById("enquiry_email").value;
        var lblError = document.getElementById("lblError_enquiry_email");
        lblError.innerHTML = "";
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (!expr.test(email)) {
            lblError.innerHTML = "Invalid email address.";
        }
    }
</script>



<script type="text/javascript">
    function Validate1(e) {
        var keyCode = e.keyCode || e.which;
 
        var lblError1 = document.getElementById("lblError_enquiry_name");
        lblError1.innerHTML = "";
 
        //Regex for Valid Characters i.e. Alphabets.
        var regex = /^[A-Za-z ]+$/;
 
        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            lblError1.innerHTML = "Only Alphabets and spaces allowed.";
        }
 
        return isValid;
    }
</script>



<script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric1(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error1").style.display = ret ? "none" : "inline";
            return ret;
        }
</script>


<!------------newsletter email------------------------->
<script>
function Subscription(e)
{
     e.preventDefault();

    var email_newsletter    = $('#email_newsletter').val();

    if(email_newsletter=="")
    {
        ValidateEmail_email_newsletter(e);
    }
    else if(ValidateEmail_email_newsletter(e)==false)
    {
        return false;
    }

    if(email_newsletter.trim()==""){
        document.getElementById("reqTxtMessage3").innerHTML="* Email is required.";
		return false;
	}	
	else{
        document.getElementById("reqTxtMessage3").innerHTML=" ";
	}


    $.ajax({ 
		url: "<?php echo base_url()?>Home/email_newsletter",
		type: "post",
		dataType: "json",
		data: {'email_newsletter':email_newsletter},
        
		success: function (response) { 
            console.log(response);
		$("#email_newsletter").val('');

		},
			error: function(jqXHR, textStatus, errorThrown) {
			console.log(textStatus, errorThrown);
		}
		});    

}
</script>

<script type="text/javascript">
    function ValidateEmail_email_newsletter() {
        var email2 = document.getElementById("email_newsletter").value;
        var lblError2 = document.getElementById("lblError2");
        lblError2.innerHTML = "";
        var expr = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!expr.test(email2)) {
            lblError2.innerHTML = "Invalid email address.";
            return false;
        }
        else{
            return true;
        }
    }
</script>
