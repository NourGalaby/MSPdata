Uploading...

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$myFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Allow certain file formats
if($myFileType != "xlsx" && $myFileType != "xls") {
    echo "OPS... That is not an Excel file.";
    $uploadOk = 0;
}


if($uploadOk==1){

	   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}else{
 echo "Sorry,the file was not uploaded successfully";
}

?> 