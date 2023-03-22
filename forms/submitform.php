<?php
$dir = "uploads/";
$filename = uniqid().$_FILES['photo']['name'];
$target = $dir.$filename;
if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target)){
echo "uploaded";
} else {
echo "error uploading";
}