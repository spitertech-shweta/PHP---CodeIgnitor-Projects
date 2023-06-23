<!DOCTYPE html>
<html lang="en">
<head>
  <title>Real Estate</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <meta name="description" content="<?php  //echo $seo_url->meta_description;  ?>">
  <meta name="keywords" content="<?php    // echo $seo_url->meta_keyword; ?>">

 	<link rel="stylesheet" href="<?php echo base_url()?>assets_frontend/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets_frontend/bootstrap/css/custom_css.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets_frontend/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<!--	<script src="<?php //echo base_url()?>assets_frontend/bootstrap/js/bootstrap.js"></script> 
  <script src="<?php //echo base_url()?>assets_frontend/script.js"></script> -->



<!-- Owl stylesheet -->
<link rel="stylesheet" href="<?php echo base_url()?>assets_frontend/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets_frontend/owl-carousel/owl.theme.css">
<script src="<?php echo base_url()?>assets_frontend/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->



<!-- slitslider -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets_frontend/slitslider/css/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets_frontend/slitslider/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets_frontend/slitslider/css/custom.css" />

<script type="text/javascript" src="<?php  echo base_url();?>assets_frontend/slitslider/js/modernizr.custom.79639.js"></script>
<noscript>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets_frontend/css/styleNoJS.css" />
</noscript>
<!-- slitslider -->


<!-- sticky navbar-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

<!--tooltip ---->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<!----Searachable Dropdown-->
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
 <script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script>
 <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
<!----Searachable Dropdown--->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js"></script>

<style type="text/css">
			.reqError{
				color: #ff0000; /*Red Color*/
				font-weight: bold;
            }


</style>


<!-- sticky navbar-->
<script>
  $(document).ready(function() {
    var $navbar = $("#mNavbar");
    
    AdjustHeader(); // Incase the user loads the page from halfway down (or something);
    $(window).scroll(function() {
        AdjustHeader();
    });
    
    function AdjustHeader(){
      if ($(window).scrollTop() > 60) {
        if (!$navbar.hasClass("navbar-fixed-top")) {
          $navbar.addClass("navbar-fixed-top");
        }
      } else {
        $navbar.removeClass("navbar-fixed-top");
      }
    }
  });
</script>
<!-- sticky navbar-->


<style>
 
 
</style>


</head>
<body>
 <div class="container" id = "top_header">
  <ul class="pull-right" class="header">
    <span class="glyphicon glyphicon-envelope"></span> hello@bootstrapreal.com &nbsp;&nbsp;
    <span class="glyphicon glyphicon-earphone"></span> (123) 456-7890      
  </ul>
</div> 


          <nav class="navbar navbar-default" id="mNavbar">
          <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
          


            <!-- Nav Starts -->
            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
            <a href="<?php echo base_url()?>api"><img src="<?php echo base_url()?>images/logo.png" id ="logo" alt="Realestate"></a>
            <ul class="nav navbar-nav navbar-right">

                          <li class ="active"><a href="<?php echo base_url()?>api/" id = "index" class="header">Home</a></li>
                          <li><a href="<?php echo base_url()?>api/about" id= "about" class="header">About</a></li>
                          <li><a href="<?php echo base_url()?>api/agent" id= "agents" class="header">Agents</a></li>       
                          <li><a href="<?php echo base_url()?>api/blog" id= "blog" class="header">Blog</a></li>
                          <li><a href="<?php echo base_url()?>api/contact" id= "contact" class="header">Contact</a></li>
                    
                          <li><a href="<?php echo base_url()?>api/services" id= "services" class="header">Services</a></li>  
                            
                      
                             <div id="prefetch" class = "box_search">
                               <input type="text" name="search_box" class="form-control input-lg typeahead" placeholder="Search Here"/>
                            </div>
                         

              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
          </nav>

<!-- #Header Starts -->

<script>
$(document).ready(function(){
  var sample_data = new Bloodhound({
   datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
   queryTokenizer: Bloodhound.tokenizers.whitespace,
   prefetch:'http://localhost/real_estate/api/api/fetch',
   remote:{
    url:'http://localhost/real_estate/api/api/fetch/%QUERY',
    wildcard:'%QUERY'
   }
  });
  

  $('#prefetch .typeahead').typeahead(null, {
   name: 'sample_data',
   display: 'name',
   source:sample_data,
   limit:10,
   templates:{
    suggestion:Handlebars.compile('<div id = "container" class ="w3-container w3-white"><div class="row"><a href = "<?php echo base_url().'api/property_details/'?>{{seo_url}}"><div class="col-md-2" style=" padding-right:5px; padding-left:5px;"><img src="<?php echo base_url();?>/{{property_main_img}}" class="img-thumbnail" width="48" /></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{property_name}}</div></a></div></div>')
   }
  });
});
</script>




<script>

$('#myCarousel').carousel();
    var winWidth = $(window).innerWidth();
    $(window).resize(function () {

        if ($(window).innerWidth() < winWidth) {
            $('.carousel-inner>.item>img').css({
                'min-width': winWidth, 'width': winWidth
            });
        }
        else {
            winWidth = $(window).innerWidth();
            $('.carousel-inner>.item>img').css({
                'min-width': '', 'width': ''
            });
        }
    });



</script>


<script>

</script>