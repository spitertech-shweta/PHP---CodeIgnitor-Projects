
<!-- banner -->
<div  class = "inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo base_url()?>" >Home</a> / Buy, Sale & Rent</span>
    <h2 id = "inside_banner">Services</h2>
</div>
</div>
<!-- banner -->

<form action ="<?php base_url()?>" id="form" method = "post" autocomplete="off">
<div class="container">
<div class="properties-listing spacer">
<div class="row">
<div class="col-lg-3 col-sm-4 ">
  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
  <input id="search_word"  type="text" name = "search_properties" class="form-control" placeholder="Product Search " >   
   <div class="row">
            <div class="col-lg-5">
              <select class="form-control" id ="search_property">
                <option>Buy</option>
                <option>Rent</option>
                <option>Sale</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control" name ="price" id = "price"  onchange="this.form.submit()">
                <option>Price</option>
                <option value = "<?php echo $min = 10000; echo "-"; echo $max = 30000; ?>">10,000 - 30,000</option>
                <option value = "<?php echo $min = 30000; echo "-"; echo $max = 50000; ?>">30,000 - 50,000</option>
                <option value = "<?php echo $min = 50000; echo "-"; echo $max = 70000; ?>">50,000 - 70,000</option>
                <option value = "<?php echo $min = 70000; echo "-"; echo $max = 90000; ?>">70,000 - 90,000</option>
              </select>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-12">
        
              <select class="form-control" id ="property_type" name ="property_type"  onchange="this.form.submit()">
              <option value = "Property Type"> Property Type </option>
              <?php foreach($property_type as $property_type_names) { ?>
                
                <option value = "<?php echo $property_type_names->property_type;?>"><?php echo $property_type_names->property_type;?></option>

              <?php } ?>
              </select>
          
              </div>
          </div>
          <button  class="btn btn-primary" type ="submit" id ="submitButton">Find Now</button>
         
  </div>
  </form>


<div class="hot-properties hidden-xs">
<h4>Hot Properties</h4>
<?php foreach($hot_properties as $hot_property_listing) { ?>
<div class="row">
                <div class="col-lg-4 col-sm-5"><a href = "<?php echo base_url().'api/property_details/'.$hot_property_listing->seo_url?>"><img src="http://localhost/real_estate/<?php echo $hot_property_listing->property_main_img;?>" class="img-responsive img-circle" alt="properties" id= "hot_property"></a></div>
                <div class="col-lg-8 col-sm-7"  id ="search_property">
                  <h5><a href = "<?php echo base_url().'api/property_details/'.$hot_property_listing->seo_url?>"><?php echo $hot_property_listing->property_name ?></a></h5>
                  <p class="price"><img src = "<?php echo base_url();?>images/rupee.jpg" id = "rupee"/><?php echo $hot_property_listing->property_price ?></p> </div>
              </div>

<?php } ?>
</div>


</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
      <div class="pull-left result"></div>
      
                <form method="post" action = "<?php echo base_url()?>api/services">
                  <div class="pull-right">
                    <select class="form-control" name = "sorting" id ="sorting"  onchange="this.form.submit()">
                      <option>Sort by</option>
                      <option name ="asc" value ="asc">Price: Low to High</option>
                      <option name ="desc" value ="desc">Price: High to Low</option>
                    </select>
                </div>
              </form>
      </div>

      <div class="row" id="property_data">
       <?php foreach($property_listing as $sort_property_by_price)  { ?>
		
            <div class="col-lg-4 col-sm-6">

              <div class="properties"><?php echo $sort_property_by_price->property_name ?><div class="image-holder"><a href="<?php echo base_url().'api/property_details/'.$sort_property_by_price->seo_url ?>"><img src="http://localhost/real_estate/<?php echo $sort_property_by_price->property_main_img ?>" class="img-responsive" alt="properties" id ="image_holder"></a>';
              <div class="status sold">Sold</div>
              </div>

            <h4><a href="<?php echo $sort_property_by_price->property_name ?>"></a></h4><p class="price">Price:<img src = "<?php echo base_url().'images/rupee.jpg'?>" id = "rupee"/><?php echo $sort_property_by_price->property_price ?>
            
          </p> <div class="listing-detail" class="w3-tooltip" title="regular tooltip"><span class="w3-text w3-tag w3-yellow" data-toggle="tooltip" data-placement="top" title="Bedroom Room"><?php echo $sort_property_by_price->property_bedroom ?></span> <span class="w3-text w3-tag w3-yellow"  data-toggle="tooltip" data-placement="top" title="Living Room"><?php echo $sort_property_by_price->property_living_room ?></span> <span class="w3-text w3-tag w3-yellow" data-toggle="tooltip" data-placement="top" title="Parking"><?php echo $sort_property_by_price->property_parking ?></span> <span class="w3-text w3-tag w3-yellow" data-toggle="tooltip" data-placement="top" title="Kitchen"><?php echo $sort_property_by_price->property_kitchen ?></span> </div>
            
            <a class="btn btn-primary" href="<?php echo base_url().'api/property_details/'.$sort_property_by_price->seo_url ?>"> View Details</a>
            
            </div>
            </div>
            

        <?php } ?>
            
   </div>
   <div><p><?php echo $links; ?></p></div>


</div>
</div>
</div>
</div>




<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
</script>


<script>
 window.onload = function() {
    var selItem = sessionStorage.getItem("SelItem");  
    $('#property_type').val(selItem);
    $('#price').val(selItem);
    $('#sorting').val(selItem);
    }
    $('#property_type').change(function() { 
        var selVal = $(this).val();
        sessionStorage.setItem("SelItem", selVal);
    });

    $('#price').change(function() { 
        var selVal = $(this).val();
        sessionStorage.setItem("SelItem", selVal);
    });

    $('#sorting').change(function() { 
        var selVal = $(this).val();
        sessionStorage.setItem("SelItem", selVal);
    });
</script>


