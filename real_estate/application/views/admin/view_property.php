

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left: 30%;">     
      					
		<div class="col-md-9">
				<div class="form-group">
                <input type="hidden" class="form-control" id="property_id" name="property_id"  value="<?php echo $view_property->property_id; ?>">
                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="property Name" value="<?php echo $view_property->property_name; ?>" readonly>
				</div>
		</div>

       
        <div class="col-md-9">
            <div class="form-group">
            <?php foreach($images as $slider_img) {?>
                    <img src = "<?php echo base_url().$slider_img->property_slider_img; ?>"  width="300" height="300" readonly/>
                    <?php } ?>
             </div>
		</div>	
       

        <div class="col-md-9" >
			<div class="form-group">
				<textarea id = "property_details" name="property_details" class= "summernote"><?php echo htmlspecialchars($view_property->property_details);?></textarea>
			</div>		
		</div>

		<div class="col-md-9">
		    <div class="form-group">
                 <input type="varchar" class="form-control" id="property_price" name="property_price" placeholder="property price" value="<?php echo $view_property->property_price; ?>" readonly>
			</div>
		</div>	

        <div class="col-md-9">
		    <div class="form-group">
                NO.OF KITCHEN <input type="number" class="form-control" id="property_kitchen" name="property_kitchen" placeholder="property kitchen" value="<?php echo $view_property->property_kitchen; ?>" readonly>
			</div>
		</div>

        <div class="col-md-9">
		    <div class="form-group">
            NO.OF BEDROOM <input type="number" class="form-control" id="property_bedroom" name="property_bedroom" placeholder="property bedroom" value="<?php echo $view_property->property_bedroom; ?>" readonly>
			</div>
		</div>	

        <div class="col-md-9">
		    <div class="form-group">
            NO.OF PARKING <input type="number" class="form-control" id="property_parking" name="property_parking" placeholder="property parking" value="<?php echo $view_property->property_parking; ?>" readonly>
			</div>
		</div>

        <div class="col-md-9">
		    <div class="form-group">
            NO.OF LIVING ROOM <input type="number" class="form-control" id="property_living_room" name="property_living_room" placeholder="property_living_room" value="<?php echo $view_property->property_living_room; ?>" readonly>
			</div>
		</div>
        
		<div class="col-md-9">
            <div class="form-group">		 
             <a href="<?php echo base_url().'admin/show_property'?>"><button class="btn btn-primary">Cancel</button></a>
			</div>
		</div>
	</div>
</div>  
</div>                                                               
 
<script>
            
            $('.summernote').summernote({
              toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
                
              ]
            });
             </script>
             


             <script>
  $('#property_details').summernote('disable');

 </script>

 
