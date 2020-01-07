<?php 
$total = count($_FILES['inpFile']['name']);

for( $i=0 ; $i < $total ; $i++ ) {
    $tmpFilePath = $_FILES['inpFile']['tmp_name'][$i];
    if ($tmpFilePath != ""){
      $newFilePath = "uploads/" . $_FILES['inpFile']['name'][$i];
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
        echo ("File ".$_FILES['inpFile']['name'][$i]." uploaded succesfully");
        echo ("\n");
      }else{
        echo ("File ".$_FILES['inpFile']['name'][$i]." didn't upload succesfully");
        echo ("\n");
      }
    }
  }
