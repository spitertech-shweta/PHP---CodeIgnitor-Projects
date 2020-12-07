


<form method = "POST" action="<?php echo base_url()?>admin/add_admin_user"  enctype='multipart/form-data'>
<div class ="row">
<div class ="col-md-4"></div>
	
	<div class="row" style="padding-left: 30%; padding-top: 10%; ">     
       <div class ="col-md-10">
       		 <div class="form-group">
            	 	<label for="name">Name</label>
                	<input type="text" class="form-control" id="name" name= "name" placeholder="Name">
			</div>
		</div>
	

		<div class="col-md-9">
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email">
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<label for="Password">Password</label>
					<input type="Password" class="form-control" id="pwd" name="pwd" placeholder="*********">
				</div>
		</div>


		<div class="col-md-9">
				<div class="form-group">
					<label for="mobile">Mobile No.</label>
					<input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Mobile No.">
				</div>
		</div>



		
			
		<div class="col-md-9">
			<div class="form-group">
				<label for="admin_role">Admin Role</label>
				<select class="form-control" id="admin_role" name="admin_role">
					<option name="super_admin" value="1">Super Admin</option>
					<option name="admin" value="2">Admin</option>
					<option name="manager" value="3">Manager</option>
				</select>
			</div>
		</div>

				<br><br>

				

		<div class="col-md-9">
            <div class="form-group">		 
   				<button type="submit" class="btn btn-primary mr-2">Save</button>
				<button type="button" class="btn btn-primary mr-2"><a href="<?php echo base_url().'admin/show_admin_user'?>">Back</a></button>

			</div>
		</div>

	</div>
</div>                                                                
</form>  


        
