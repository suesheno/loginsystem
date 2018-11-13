<?php

if( isset($_POST['submit']) ){

  $file = $_FILES['file'];
  //print_r($file);

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  //print_r($fileExt);
  $fileActualExt = strtolower(end($fileExt));
  //echo $fileActualExt;

  $allowed = array('jpg', 'png', 'jpeg', 'pdf');

  if( in_array($fileActualExt, $allowed) ){
    if( $fileError === 0 ){
      if( $fileSize < 1000000){
        $fileNameNew = uniqid("", true).".".$fileActualExt;
        $fileDistanation = 'uploads/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDistanation);

        header('Location: index.php?uploadsuccess');
      }
      else{
          echo "The file is too big!";
      }
    }
    else{
      echo "There was an error uploading your file";
    }
  }
  else {
    echo "You can't upload a file of this type";
  }
}
