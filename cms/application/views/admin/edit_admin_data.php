

<form method = "POST" action="<?php echo base_url()?>admin/update_admin_data"  enctype='multipart/form-data'>
<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-left: 30%; padding-top: 10%; ">     
       <div class ="col-md-9">
       		 <div class="form-group">
					<input type="hidden" name="admin_id" value="<?php echo $h->admin_id; ?>">
            	 	<label for="name">Name</label>
                	<input type="text" class="form-control" id="name" name= "name" placeholder="Name" value="<?php echo $h->name; ?>">
			</div>
		</div>
	

		<div class="col-md-9">
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email" value = "<?php echo $h->email; ?>">
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<label for="Password">Password</label>
					<input type="Password" class="form-control" id="pwd" name="pwd" placeholder="*********" value="<?php echo $h->pwd; ?>">
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
					<label for="mobile">Mobile No.</label>
					<input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Mobile No." value="<?php echo $h->mobile;?>">
				</div>
		</div>

		<div class="col-md-9">
			<div class="form-group">
			<?php
			$admin_role="";
				if($h->admin_role == '1')
				{
					$admin_role = "Super Admin";
				}
				else if($h->admin_role == '2')
				{
					$admin_role = "Admin";
				}
				else if($h->admin_role == '3')
				{
					$admin_role = "Mananger";
				}



				?>

				<label for="admin_role">Admin Role</label>
				<select class="form-control"  name = "admin_role">
				<option name ='super_admin' value='Super Admin'
				<?php
					if($admin_role=='Super Admin')
					{
						echo "selected";
					}
				?>>Super Admin
				</option>	
				<option name ='admin' value='Admin'
				<?php
					if($admin_role=='Admin')
					{
						echo "selected";
					}
				?>>Admin
				</option>	
				<option name ='manager' value='Manager'
				<?php
					if($admin_role =='Manager')
					{
						echo "selected";
					}
				?>>Manager
				</option>
				<select>
			</div>
		</div>		

		<div class="col-md-9">
            <div class="form-group">		 
   				<input type="submit" class="btn btn-primary mr-2">
            	<button class="btn btn-light">Cancel</button>
			</div>
		</div>

	</div>
</div>                                                                 
</form>  


        
