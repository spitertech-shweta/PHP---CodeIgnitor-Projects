<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo base_url()?>home_page" >Home</a> / Buy, Sale & Rent</span>
    <h2>Services</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form"><h4><span class="glyphicon glyphicon-search" id = "search_form"></span> Search for</h4>
    <input type="text" class="form-control" placeholder="Search of Properties" id ="search_property">
    <div class="row">
            <div class="col-lg-5">
              <select class="form-control" id ="search_property">
                <option>Buy</option>
                <option>Rent</option>
                <option>Sale</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control" id ="search_property">
                <option>Price</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <select class="form-control" id ="search_property">
                <option>Property Type</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
              </div>
          </div>
          <button class="btn btn-primary" id ="search_property">Find Now</button>

  </div>



<div class="hot-properties hidden-xs">
<h4>Hot Properties</h4>
<?php foreach($hot_property as $hot_property_listing) { ?>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="<?php echo base_url().$hot_property_listing->property_img;?>" class="img-responsive img-circle" alt="properties" id= "hot_property"></div>
                <div class="col-lg-8 col-sm-7"  id ="search_property">
                  <h5><a href="<?php echo $hot_property_listing->property_name ?>" id ="search_property"><?php echo $hot_property_listing->property_name ?></a></h5>
                  <p class="price"><?php echo $hot_property_listing->property_price ?></p> </div>
              </div>

<?php } ?>
</div>


</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result" id ="search_property">Showing: 12 of 100 </div>
  <div class="pull-right">
  <select class="form-control" id ="search_property" onchange="myFunction()">
  <option>Sort by</option>
  <option>Price: Low to High</option>
  <option>Price: High to Low</option>
</select></div>
</div>
<div class="row">

     <!-- properties -->
     <?php foreach($property as $property_listing)  { ?>

      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url().$property_listing->property_img; ?>" class="img-responsive" alt="properties" id ="image_holder">
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="<?php echo $property_listing->property_name; ?>"></a></h4>
        <p class="price">Price:<img src = "<?php base_url();?>images/rupee.jpg" id = "rupee"/><?php echo $property_listing->property_price; ?> </p>
        <div class="listing-detail" class="w3-tooltip" title="regular tooltip"><span class="w3-text w3-tag w3-yellow" data-toggle="tooltip" data-placement="top" title="Bedroom Room"><?php echo $property_listing->property_bedroom;?></span> <span class="w3-text w3-tag w3-yellow"  data-toggle="tooltip" data-placement="top" title="Living Room"><?php echo $property_listing->property_living_room;?></span> <span class="w3-text w3-tag w3-yellow" data-toggle="tooltip" data-placement="top" title="Parking"><?php echo $property_listing->property_parking;?></span> <span class="w3-text w3-tag w3-yellow" data-toggle="tooltip" data-placement="top" title="Kitchen"><?php echo $property_listing->property_kitchen; ?></span> </div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
      </div>
      </div>
     
      <?php } ?>
      <!-- properties -->
  

      <div class="center">
<ul class="pagination" id ="search_property">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul>
</div>

</div>
</div>
</div>
</div>
</div>


<script>

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</script>