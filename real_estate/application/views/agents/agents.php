
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Agents</span>
    <h2>Agents</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer agents">

<div class="row">
  <div class="col-lg-8  col-lg-offset-2 col-sm-12">
  <?php foreach($agent as $agent_listing) { ?>
      <!-- agents -->
      <div class="row">
        <div class="col-lg-2 col-sm-2"><a href="#"><img src="<?php echo base_url().$agent_listing->agent_img; ?>" class="img-responsive"  alt="agent name" id = "agent_img"></a></div>
        <div class="col-lg-7 col-sm-7"><h4 id= "agent_content"><p><?php echo $agent_listing->agent_desc;?></p></h4></div>
        <div class="col-lg-3 col-sm-3"><span style ="padding-left:1px;"class="glyphicon glyphicon-envelope"></span> <a href="mailto:<?php $agent_listing->agent_email?>"><?php echo $agent_listing->agent_email?></a><br>
        <span class="glyphicon glyphicon-earphone"></span><?php echo $agent_listing->agent_mobile?></div>
      </div>
      <!-- agents -->
  <?php } ?> 

  </div>
</div>


</div>
</div>

