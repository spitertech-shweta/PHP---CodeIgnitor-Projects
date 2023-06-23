
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo  base_url();?>">Home</a> / Blogs</span>
    <h2>Blogs</h2>
</div> 
</div>
<!-- banner -->


<div class="container">
  <div class="spacer blog">
      <div class="row">
            <div class="col-lg-8">

            <!-- blog detail -->
            <h2><?php echo $blog_detail->blog_name?></h2>
            <div class="info">Posted on: <?php echo $blog_detail->blog_date?></div>
            <img src="http://localhost/real_estate/<?php echo $blog_detail->blog_img?>" id= "image_holder" class="thumbnail img-responsive"  alt="blog title">
            <p><?php echo $blog_detail->blog_content?></p>
            <!-- blog detail -->
          
            </div>



      </div><!-- row-->
  </div>
</div>

