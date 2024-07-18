<?php

function uploadImage ($name, $url) {
    $fileName = $_FILES[$name]["name"];
    $targetDir = $url;
    $target_file = $targetDir.basename($_FILES[$name]["name"]);
    if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
      // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
      // echo "Sorry, there was an error uploading your file.";
    }
    return $fileName;
}
