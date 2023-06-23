

<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left: 30%;">     
      					
		<div class="col-md-9">
				<div class="form-group">
                <input type="hidden" class="form-control" id="user_id" name="user_id"  value="<?php echo $view_user->user_id; ?>">
                <input type="text" class="form-control" id="user_fname" name="user_fname" placeholder="user First Name" value="<?php echo $view_user->user_fname; ?>" readonly>
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
                <input type="text" class="form-control" id="user_lname" name="user_lname" placeholder="user Last Name" value="<?php echo $view_user->user_lname; ?>" readonly>
				</div>
		</div>

	
		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="user_mobile" name="user_mobile" placeholder="User Mobile" value ="<?php echo $view_user->user_mobile; ?>" readonly>
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="user_email" name="user_email" placeholder="User Email" value ="<?php echo $view_user->user_email; ?>" readonly>
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="user_address" name="user_address" placeholder="User Address" value ="<?php echo $view_user->user_address; ?>" readonly>
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="user_working_time" name="user_working_time" placeholder="User Working Time" value ="<?php echo $view_user->user_working_time; ?>" readonly>
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="user_country" name="user_country" placeholder="User Country" value ="<?php echo $view_user->user_country; ?>" readonly>
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="user_state" name="user_state" placeholder="User State" value ="<?php echo $view_user->user_state; ?>" readonly>
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="user_city" name="user_city" placeholder="User City" value ="<?php echo $view_user->user_city; ?>" readonly>
				</div>
		</div>

		<div class="col-md-9">
            <div class="form-group">
                <label>User Quote</label>
                    <h3 style ="width:600px;"> <textarea name="user_quote" readonly><?php echo htmlspecialchars($view_user->user_quote); ?></textarea></h3>
            </div>
    	</div>

		
		<div class="col-md-9">
            <div class="form-group">
                <label>User Info</label>
                    <h3 style ="width:600px;"> <textarea name="user_info" readonly><?php echo htmlspecialchars($view_user->user_info); ?></textarea></h3>
            </div>
    	</div>	

      
				<br><br>

		<div class="col-md-9">
            <div class="form-group">
            <img src = "<?php echo base_url().$view_user->user_img; ?>"  width="300" height="300" readonly>

             </div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<input type="text" class="form-control" id="user_map" name="user_map" placeholder="User Map Api" value ="<?php echo $view_user->user_map; ?>" readonly>
				</div>
		</div>		

        
		<div class="col-md-9">
            <div class="form-group">		 
			<iframe class="contact-maps" src="<?php echo $view_user->user_map;?>" width="600" height="270" style="border:0" allowfullscreen></iframe>

			</div>
		</div>

	</div>
</div>  
</div>                                                               
 




 <script>
   CKEDITOR.replace('user_quote');
   CKEDITOR.replace('user_info');

 </script>

