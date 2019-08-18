<?php

//Compress Image 
function compressImage($ext, $uploadedfile) {
    if ($ext == "jpg" || $ext == "jpeg") {
        $src = imagecreatefromjpeg($uploadedfile);
    } else if ($ext == "png") {
        $src = imagecreatefrompng($uploadedfile);
    } else if ($ext == "gif") {
        $src = imagecreatefromgif($uploadedfile);
    } else {
        $src = imagecreatefrombmp($uploadedfile);
    }

    list($width, $height) = getimagesize($uploadedfile);
    $tmp = imagecreatetruecolor(48, 48);
    imagecopyresampled($tmp, $src, 0, 0, 0, 0, 48, 48, $width, $height);
    $filename = "img/icons/service-icon-1.png";
    imagejpeg($tmp, $filename, 100);
    imagedestroy($tmp);
}

?>