
<form method = "POST" action="<?php echo base_url()?>admin/update_user"  enctype='multipart/form-data'>
<div class ="row">
<div class ="col-md-3"></div>
	
	<div class="row" style="padding-top: 7%; padding-left:30%; padding-right: 20%;">     
  <div class="col-md-9">
            <div class="form-group">
                <table>
                <tr>
                    <td> <label>User Image</label><span class="btn btn-success fileinput-button" style="display:block; background-color:teal; width:250px;height:60px;">
                     <input type="file" name="user_img" id="user_img"/></td><td>&nbsp;&nbsp;</td>
                    <td><img src = "<?php echo base_url().$edit_user->user_img;?>" width = "100" height = "100"/></td> 
                    <input type ="hidden" name ="old_user_img" id ="old_user_img" value="<?php echo $edit_user->user_img; ?>">     
                 </tr>
                 </table>   
                 <output id="Main_Filelist">
		
                 </output>   
             </div>
		    </div>						

                
		<div class="col-md-9">
				<div class="form-group">
        <label>First Name</label>
                <input type="text" class="form-control" id="user_fname" name="user_fname" placeholder="User First Name" value="<?php echo $edit_user->user_fname; ?>">
      	</div>
    </div>
    
    <div class="col-md-9">
				<div class="form-group">
        <label>Last Name</label>
                <input type="text" class="form-control" id="user_lname" name="user_lname" placeholder="User Last Name" value="<?php echo $edit_user->user_lname; ?>">
      	</div>
		</div>

    <div class="col-md-9">
				<div class="form-group">
        <label>Gender</label>
                <input type="text" class="form-control" id="user_gender" name="user_gender" placeholder="User Gender" value="<?php echo $edit_user->user_gender; ?>">
      	</div>
		</div>


    <div class="col-md-9">
				<div class="form-group">
        <label>Mobile No.</label>
					<input type="number" class="form-control" id="user_mobile" name="user_mobile" placeholder="User Mobile" value ="<?php echo $edit_user->user_mobile; ?>">
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
        <label>Email</label>
					<input type="text" class="form-control" id="user_email" name="user_email" placeholder="User Email" value ="<?php echo $edit_user->user_email; ?>" readonly>
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
        <label>Address</label>
					<input type="text" class="form-control" id="user_address" name="user_address" placeholder="User Address" value ="<?php echo $edit_user->user_address; ?>">
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
        <label>Working time</label>
					<input type="text" class="form-control" id="user_working_time" name="user_working_time" placeholder="User Working Time" value ="<?php echo $edit_user->user_working_time; ?>">
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
        <label>Country</label>
					<input type="text" class="form-control" id="user_country" name="user_country" placeholder="User Country" value ="<?php echo $edit_user->user_country; ?>">
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
        <label>state</label>
					<input type="text" class="form-control" id="user_state" name="user_state" placeholder="User State" value ="<?php echo $edit_user->user_state; ?>">
				</div>
		</div>

		<div class="col-md-9">
				<div class="form-group">
        <label>City</label>
					<input type="text" class="form-control" id="user_city" name="user_city" placeholder="User City" value ="<?php echo $edit_user->user_city; ?>">
				</div>
		</div>

    <div class="col-md-9">
				<div class="form-group">
        <label>User Map</label>
					<input type="text" class="form-control" id="user_map" name="user_map" placeholder="User Map Api" value ="<?php echo $edit_user->user_map; ?>">
          <h6 style="color: red;"><?php  echo $this->session->flashdata('user_map') ?></h6>
          <h6 style="color: red;"><b><?php echo $this->session->flashdata('user_map_variable') ?></b></h6>
      	</div>
		</div>

		<div class="col-md-9">
            <div class="form-group">
              <h5 style ="width:600px;"> <label>User Quote</label> <textarea name="user_quote"><?php echo $edit_user->user_quote; ?></textarea></h5>
            </div>
    	</div>

		
		<div class="col-md-9">
            <div class="form-group">
                <h5 style ="width:600px;"><label>User Info</label> <textarea name="user_info"><?php echo $edit_user->user_info; ?></textarea></h5>
            </div>
    	</div>	

		<br><br>
  

        <div class="col-md-9">
            <div class="form-group">		 
   				    <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </div>
			</div>
		</div>

	</div>
</div>  
</div>                                                               
</form> 

<script>
$(document).ready(function()
{
  var user_map = $('#user_map').val();
   
  reg_user_map = /^https?\:\/\/(www\.|maps\.)?google\.[a-z]+\/maps\/?\?([^&]+&)*(ll=-?[0-9]{1,2}\.[0-9]+,-?[0-9]{1,2}\.[0-9]+|q=[^&]+)+($|&)/;

  var user_map_error = document.getElementById("lblError_user_map");
  
  
	  if(!reg_user_map.test(user_map))
	  {  
      $('#user_map').focus();
       return false;
     }

    if(user_map=='')
    {
      $('#user_map').focus();
       return false;
    }


});
</script>

<script>
    CKEDITOR.replace('user_info');
    CKEDITOR.replace('user_quote');
</script> 




<!--Main Image --->
<script>

//I added event handler for the file upload control to access the files properties.
document.addEventListener("DOMContentLoaded", init, false);

//To save an array of attachments
var AttachmentArray = [];

//counter for attachment array
var arrCounter = 0;

//to make sure the error message for number of files will be shown only one time.
var filesCounterAlertStatus = false;

//un ordered list to keep attachments thumbnails
var ul = document.createElement("ul");
ul.className = "thumb-Images";
ul.id = "imgList";

function init() {
  //add javascript handlers for the file upload event
  document
    .querySelector("#user_img")
    .addEventListener("change", handleFileSelect, false);
}

//the handler for file upload event
function handleFileSelect(e) {
  //to make sure the user select file/files
  if (!e.target.files) return;

  //To obtaine a File reference
  var files = e.target.files;

  // Loop through the FileList and then to render image files as thumbnails.
  for (var i = 0, f; (f = files[i]); i++) {
    //instantiate a FileReader object to read its contents into memory
    var fileReader = new FileReader();

    // Closure to capture the file information and apply validation.
    fileReader.onload = (function(readerEvt) {
      return function(e) {
        //Apply the validation rules for attachments upload
        ApplyFileValidationRules(readerEvt);

        //Render attachments thumbnails.
        RenderThumbnail(e, readerEvt);

        //Fill the array of attachment
        FillAttachmentArray(e, readerEvt);
      };
    })(f);

    // Read in the image file as a data URL.
    // readAsDataURL: The result user will contain the file/blob's data encoded as a data URL.
    // More info user Data URI scheme https://en.wikipedia.org/wiki/Data_URI_scheme
    fileReader.readAsDataURL(f);
  }
  document
    .getElementById("user_img")
    .addEventListener("change", handleFileSelect, false);
}

//To remove attachment once user click on x button
jQuery(function($) {
  $("div").on("click", ".img-wrap .close", function() {
    var id = $(this)
      .closest(".img-wrap")
      .find("img")
      .data("id");

    //to remove the deleted item from array
    var elementPos = AttachmentArray.map(function(x) {
      return x.FileName;
    }).indexOf(id);
    if (elementPos !== -1) {
      AttachmentArray.splice(elementPos, 1);
    }

    //to remove image tag
    $(this)
      .parent()
      .find("img")
      .not()
      .remove();

    //to remove div tag that contain the image
    $(this)
      .parent()
      .find("div")
      .not()
      .remove();

    //to remove div tag that contain caption name
    $(this)
      .parent()
      .parent()
      .find("div")
      .not()
      .remove();

    //to remove li tag
    var lis = document.querySelectorAll("#imgList li");
    for (var i = 0; (li = lis[i]); i++) {
      if (li.innerHTML == "") {
        li.parentNode.removeChild(li);
      }
    }
  });
});

//Apply the validation rules for attachments upload
function ApplyFileValidationRules(readerEvt) {
  //To check file type according to upload conditions
  if (CheckFileType(readerEvt.type) == false) {
    alert(
      "The file (" +
        readerEvt.name +
        ") does not match the upload conditions, You can only upload jpg/png/gif files"
    );
    e.preventDefault();
    return;
  }

  //To check file Size according to upload conditions
  if (CheckFileSize(readerEvt.size) == false) {
    alert(
      "The file (" +
        readerEvt.name +
        ") does not match the upload conditions, The maximum file size for uploads should not exceed 300 KB"
    );
    e.preventDefault();
    return;
  }

  //To check files count according to upload conditions
  if (CheckFilesCount(AttachmentArray) == false) {
    if (!filesCounterAlertStatus) {
      filesCounterAlertStatus = true;
      alert(
        "You have added more than 10 files. According to upload conditions you can upload 10 files maximum"
      );
    }
    e.preventDefault();
    return;
  }
}

//To check file type according to upload conditions
function CheckFileType(fileType) {
  if (fileType == "image/jpeg") {
    return true;
  } else if (fileType == "image/png") {
    return true;
  } else if (fileType == "image/gif") {
    return true;
  } else {
    return false;
  }
  return true;
}

//To check file Size according to upload conditions
function CheckFileSize(fileSize) {
  if (fileSize < 300000) {
    return true;
  } else {
    return false;
  }
  return true;
}

//To check files count according to upload conditions
function CheckFilesCount(AttachmentArray) {
  //Since AttachmentArray.length return the next available index in the array,
  //I have used the loop to get the real length
  var len = 0;
  for (var i = 0; i < AttachmentArray.length; i++) {
    if (AttachmentArray[i] !== undefined) {
      len++;
    }
  }
  //To check the length does not exceed 10 files maximum
  if (len > 9) {
    return false;
  } else {
    return true;
  }
}

//Render attachments thumbnails.
function RenderThumbnail(e, readerEvt) {
  var li = document.createElement("li");
  ul.appendChild(li);
  li.innerHTML = [
    '<div class="img-wrap"> <span class="close">&times;</span>' +
      '<img class="thumb" src="',
    e.target.result,
    '" title="',
    escape(readerEvt.name),
    '" data-id="',
    readerEvt.name,
    '"/>' + "</div>"
  ].join("");

  var div = document.createElement("div");
  div.className = "FileNameCaptionStyle";
  li.appendChild(div);
  div.innerHTML = [readerEvt.name].join("");
  document.getElementById("Main_Filelist").insertBefore(ul, null);
}

//Fill the array of attachment
function FillAttachmentArray(e, readerEvt) {
  AttachmentArray[arrCounter] = {
    AttachmentType: 1,
    ObjectType: 1,
    FileName: readerEvt.name,
    FileDescription: "Attachment",
    NoteText: "",
    MimeType: readerEvt.type,
    Content: e.target.result.split("base64,")[1],
    FileSizeInBytes: readerEvt.size
  };
  arrCounter = arrCounter + 1;
}

</script>


