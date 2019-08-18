<?php

error_reporting(0);
$valid_formats = array("jpg", "png", "gif", "bmp", "jpeg", "PNG", "JPG", "JPEG", "GIF", "BMP", "PSD");
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
    include_once 'includes/getExtension.php';
    $imagename = $_FILES['logoimage']['name'];
    $size = $_FILES['logoimage']['size'];
    if (strlen($imagename)) {
        $ext = strtolower(getExtension($imagename));
        if (in_array($ext, $valid_formats)) {

            $uploadedfile = $_FILES['logoimage']['tmp_name'];
            include 'includes/compressImage.php';
            compressImage($ext, $uploadedfile);
        } else
            echo "Invalid file format..";
    } else
        echo "Please select image..!";
    exit;
}
?>