
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo  base_url();?>">Home</a> / About Us</span>
    <h2>About Us</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row">
<?php  foreach($home_page as $page) { ?>
  <div class="col-lg-8  col-lg-offset-2">
  <img src="<?php echo base_url().$page->page_img;?>" id = "about_img" class="img-responsive thumbnail"  alt="realestate">
  <h3><?php echo $page->page_name;?></h3>
  <p></p>
  <h3></h3>
  <p><?php echo $page->page_description;?> </p>
  <p> </p>
  </div>
 <?php } ?>
</div>
</div>
</div>

