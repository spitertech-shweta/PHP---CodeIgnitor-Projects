<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Blogs</span>
    <h2>Blogs</h2>
</div>
</div>
<!-- banner -->


<div class="container">
  <div class="spacer blog">
    <div class="row">
   

        <div class="col-lg-8 col-sm-12 ">
        <?php foreach($blog as $blog_listing) { ?>
        <!-- blog list -->
        <div class="row">
           <div class="col-lg-4 col-sm-4 "><a href="<?php echo base_url().'blog_detail/'.$blog_listing->seo_url ?>" class="thumbnail"><img src="<?php echo base_url().$blog_listing->blog_img?>" alt="blog title" id="image_holder"></a></div>
           <div class="col-lg-8 col-sm-8 ">
           <h3><a href="<?php echo base_url().'blog_detail/'.$blog_listing->seo_url ?>"><?php echo $blog_listing->blog_name?></a></h3>
           <div class="info">Posted on: <?php echo $blog_listing->blog_date?></div>                                               
           <p><?php echo $blog_listing->blog_content?></p>
           <a href="<?php echo base_url().'blog_detail/'.$blog_listing->seo_url ?>" class="more">Read More</a>
        </div>
       
        </div>
        <!-- blog list -->



        <?php } ?>
      </div>
      
    </div>
  </div>
</div>

