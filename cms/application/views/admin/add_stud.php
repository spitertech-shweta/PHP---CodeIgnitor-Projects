

<form method = "POST" action="<?php echo base_url()?>admin/add_stud_data"  enctype='multipart/form-data'>
<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%;">     
       <div class ="col-md-9">
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
				<label for="gender">Gender</label>
				<select class="form-control" id="gender" name = "gender">
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
		</div>

				<br><br>

		<div class="col-md-9">
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img" id="img" class="file-upload-default">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button" name="upload" value="Upload">Upload</button>
			    </span>
             </div>
		</div>		

		<div class="col-md-9">
            <div class="form-group">		 
   				<button type="submit" class="btn btn-primary mr-2">Submit</button>
            	<button class="btn btn-light"><a href="<?php echo base_url().'admin/show_stud'?>">Cancel</a></button>

			</div>
		</div>

	</div>
</div>  
</div>                                                               
</form>  


 
