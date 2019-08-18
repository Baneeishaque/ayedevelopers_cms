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
    $tmp = imagecreatetruecolor(300, 300);
    imagecopyresampled($tmp, $src, 0, 0, 0, 0, 300, 300, $width, $height);
    $filename = "img/team/1.jpg";
    imagejpeg($tmp, $filename, 100);
    imagedestroy($tmp);
}

?>