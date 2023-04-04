<?php 
$temp = explode(".", $_FILES["file"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$destinationFilePath = './img-uploads/'.$newfilename ;
if(move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)){
  echo  $destinationFilePath;
}
?>