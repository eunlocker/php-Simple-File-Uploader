<?php

$newdir= $_POST["folder"];
$fileName = $_FILES["file1"]["name"]; 
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; 
$fileType = $_FILES["file1"]["type"]; 
$fileSize = $_FILES["file1"]["size"]; 
$fileErrorMsg = $_FILES["file1"]["error"]; 

if (!$fileTmpLoc) { 
  exit();
}

 $uploadFileDir = './files/'.$newdir.'/';

 if (!file_exists('./files/'.$newdir.'/')) {
    mkdir('./files/'.$newdir.'/', 0777, true);
}

 $dest_path = $uploadFileDir . $fileName;

if(move_uploaded_file($fileTmpLoc, $dest_path)){
  echo "https://example.com/files/$newdir/$fileName upload is complete";
} else {
  echo "file upload failed";
}

?>
