
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo base_url()?>home_page" >Home</a> / Buy, Sale & Rent</span>
    <h2>Services</h2>
</div>
</div>
<!-- banner -->

<form action="">
<div class="container">
<div class="properties-listing spacer">
<div class="row">
<div class="col-lg-3 col-sm-4 ">
  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
  <input id="search_word"  type="text" class="form-control" placeholder="Product Search " >   
   <div class="row">
            <div class="col-lg-5">
              <select class="form-control" id ="search_property">
                <option>Buy</option>
                <option>Rent</option>
                <option>Sale</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control" id ="price">
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
              <select class="form-control" id ="property_type">
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
<?php foreach($hot_property as $hot_property_listing) { ?>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="<?php echo base_url().$hot_property_listing->property_main_img;?>" class="img-responsive img-circle" alt="properties" id= "hot_property"></div>
                <div class="col-lg-8 col-sm-7"  id ="search_property">
                  <h5><a href="<?php echo $hot_property_listing->property_name ?>" id ="search_property"><?php echo $hot_property_listing->property_name ?></a></h5>
                  <p class="price"><img src = "<?php echo base_url();?>images/rupee.jpg" id = "rupee"/><?php echo $hot_property_listing->property_price ?></p> </div>
              </div>

<?php } ?>
</div>


</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
      <div class="pull-left result"></div>
      
                <form method="post" action = "">
                <div class="pull-right">
                  <select class="form-control" name = "sorting" id ="sorting">
                    <option>Sort by</option>
                    <option name ="asc" value ="asc">Price: Low to High</option>
                    <option name ="desc" value ="desc">Price: High to Low</option>
                  </select>
                  <noscript><input type="submit" value="Submit"></noscript>
              </div>
              </form>
      </div>


          <div class="row" id="property_data">
                 
          </div>


          <div id="pagination_link">  </div>


</div>
</div>
</div>
</div>


<script>


$(document).ready(function(){

  $('#sorting').on('change', function() {
   var sort_order = this.value;
   load_property_data(1,"",sort_order,"","","");
    });


    $('#price').on('change', function() {
    var dropdown_price = this.value;
    var price = dropdown_price.split("-");
    var min = price[0];
    var max = price[1];

    load_property_data(1,"","",min,max,"");
    });


    $('#property_type').on('change', function() {
    var property_type = this.value;
    load_property_data(1,"","","","",property_type);
 
    });


  $('#submitButton').on('click', function(e) {
        e.preventDefault();

        var search = $("#search_word").val();
        load_property_data(1,search,"","","","");
        $('#pagination_link').hide();
    
      });


 function load_property_data(page,search,sort_order,min,max,property_type)
 {
  $('#pagination_link').show();
  
    if(search=="")
    {
      search = '0';
    }
    if(sort_order=="")
    {
      sort_order = 'asc';
    }
    if(min=="")
    {
      min = 0;
    }
    if(max=="")
    {
      max = 0;
    }
    if(property_type=="")
    {
      property_type = 0;
    }
   

        $.ajax({
            url:  "<?php echo base_url(); ?>Home/pagination/"+page+"/"+search+"/"+sort_order+"/"+min+"/"+max+"/"+property_type,
            method:"GET",
            dataType:"json",
            success:function(data)
            {
              $('#property_data').html(data.property_data);
              $('#pagination_link').html(data.pagination_link);
            }
            });

 }
 
 load_property_data(1,"","","","","");

 $(document).on("click", ".pagination li a", function(event){
  event.preventDefault();
  var page = $(this).data("ci-pagination-page");
  load_property_data(page,"","","","","");
 });

});
</script>


