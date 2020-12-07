

<form method = "POST" action="<?php echo base_url()?>admin/update_stud_data"  enctype='multipart/form-data'>
<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%;">     
       <div class ="col-md-9">
       		 <div class="form-group">
					<input type="hidden" name="id" value="<?php echo $h->id; ?>">
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
				<label for="gender">Gender</label>
				<select class="form-control"  name = "gender">
				<option name ='Male' value='Male'
				<?php
					if($h->gender=='Male')
					{
						echo "selected";
					}
				?>>Male
				</option>	
				<option name ='Female' value='Female'
				<?php
					if($h->gender=='Female')
					{
						echo "selected";
					}
				?>>Female

				</option>	
				</select>
			</div>
		</div>

		<br><br>

		<div class="col-md-9">
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img" id="img" class="file-upload-default" value="<?php echo $h->img;?>">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" value="<?php echo $h->img; ?>">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button" name="upload" value="Upload">Upload</button>
			    </span>
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


        
