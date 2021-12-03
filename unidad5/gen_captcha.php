<?php 
session_start();
header("Content-type: image/png");
$img= imagecreate(100, 30);
imagecolorallocate($img, 255, 255, 255);
imagestring($img, 5, 25, 6, $_SESSION['captcha'], imagecolorallocate($img,0,0,0));
imagepng($img); ?>