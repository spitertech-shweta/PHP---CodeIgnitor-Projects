
<div class="row">
    <div class ="col-md-3"></div>			
			<div class="row"> 
          <div class="col-md-12">
          <div class="card" style = "padding-right:100px; padding-left:350px; padding-top:80px;padding-bottom:80px;"> 
          <div class="card-header"><h3>CLIENT TESTIMONIALS</h3></div>  
         
          <div class="container-fluid"> <a href="<?php echo base_url().'admin/trash_testimonial_0/'?>"> <button type="button" style="margin:5px;" class="btn btn-primary float-right">TRASH</button></a>
          <a href="<?php echo base_url().'admin/testimonial/'?>"><button type="button" style="margin:5px;" class="btn btn-primary float-right">ADD</button></a></div>       
          <div class="card-body" class="table-actions">
            
            <table  id="data_table" class="table table-bordered">
            <thead>
              <tr>
              <th style="width:190px">name</th>
              <th style="width:190px">designation</th>
              <th style="width:190px">image</th> 
              <th>&nbsp;</th>
			        <th>Action</th>
			        <th>&nbsp;</th>
			        <th></th>
              </tr>
            </thead>
            <tbody><?php foreach($show_testimonial as $testimonial_listing) { ?>
              <tr>
                <td><?php echo $testimonial_listing->client_name;?></td>
               
                <td><?php echo $testimonial_listing->client_designation;?></td>
                <td><img src="<?php echo base_url().$testimonial_listing->client_img; ?>" class="table-user-thumb" alt=""></td>
               
                <td><div class="table-actions">
                     <a href="<?php echo base_url().'admin/view_testimonial/'.$testimonial_listing->client_id;?>"><button type="button" class="btn btn-primary">VIEW</button></a>
                    </div>
                </td>
               
                <td><div class="table-actions"> 
                    <a href="<?php echo base_url().'admin/edit_testimonial/'.$testimonial_listing->client_id;?>"><button type="button" class="btn btn-primary">EDIT</button></a>
                    </div>
                </td>


                <td><div class="table-actions"> 
                    <a href="<?php echo base_url().'admin/onDelete_update_testimonial/'.$testimonial_listing->client_id;?>"><button type="button" class="btn btn-primary">DELETE</button></a></td>
                    </div>
                </td>

                <td></td>
              
                

              </tr>
              <?php } ?>
            </tbody>
          </table>
          </div>  
          </div>
          </div>
         
               
</div>
</div>

</div>
</div>




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
    .querySelector("#work_img")
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
    // readAsDataURL: The result property will contain the file/blob's data encoded as a data URL.
    // More info about Data URI scheme https://en.wikipedia.org/wiki/Data_URI_scheme
    fileReader.readAsDataURL(f);
  }
  document
    .getElementById("work_img")
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

























<script>
 window.onload = function() {
    var selItem = sessionStorage.getItem("SelItem");  
    $('#work_category').val(selItem);
    }
    $('#work_category').change(function() { 
        var selVal = $(this).val();
        sessionStorage.setItem("SelItem", selVal);
    });
</script>


<script>
    CKEDITOR.replace('work_desc');
</script>   

